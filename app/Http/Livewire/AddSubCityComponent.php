<?php

namespace App\Http\Livewire;

use App\Models\SubCity;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddSubCityComponent extends Component
{

    use WithFileUploads;

    public $title;
    public $mainCity;
    public $mainImage;

    public function mount($city_id){
        $this->mainCity = $city_id;
    }

    public function store()
    {  
   
       //create new row 
       $subcity = new SubCity();
       $subcity->title = $this->title;
       $subcity->city_id = $this->mainCity;

        //upload image

       // to get the original name of the image for example test.png
       $imageName      = $this->mainImage->getClientOriginalName();

       // add random number to image for example 1213213.test.png to avoid has more than image with same name
       $imageExtention  = time() . '.' . $imageName;

       //
       $this->mainImage->storeAs('gallery',$imageExtention,'public');
       $subcity->main_image_sub= $imageExtention;  


       $subcity->save();

       return redirect()->route('subcity.add.messages');


    }

    public function render()
    {
        return view('livewire.add-sub-city-component')->layout('layouts.base');
    }
}
