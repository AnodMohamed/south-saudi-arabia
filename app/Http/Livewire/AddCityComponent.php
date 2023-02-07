<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

use Illuminate\Support\Facades\Auth;

class AddCityComponent extends Component
{
    
    use WithFileUploads;

    public $title;
    public $mainImage;
    public $description;


    public function store()
    {  
   
        //create new row 
       $city = new City();
       //send values to database
       $city->title = $this->title;   
       $city->description = $this->description ; 
       //upload image
       // to get the original name of the image for example test.png
       $imageName      = $this->mainImage->getClientOriginalName();

       // add random number to image for example 1213213.test.png to avoid has more than image with same name
       $imageExtention  = time() . '.' . $imageName;

       //
       $this->mainImage->storeAs('gallery',$imageExtention, 'public');
       $city->main_image= $imageExtention;  
       $city->save();
       return redirect()->route('city.add.messages');

    }


    public function render()
    {
        return view('livewire.add-city-component')->layout('layouts.base');
    }
}
