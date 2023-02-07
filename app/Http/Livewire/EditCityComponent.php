<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCityComponent extends Component
{
    use WithFileUploads;

    public $city_id;
    public $title;
    public $mainImage;
    public $description;


    public function mount($city_id)
    {
        
        $city = City::where('id', $city_id)->first();
        $this->title = $city->title;
        $this->description = $city->description;
        $this->city_id=$city->id;

    }

    public function store()
    {  
   
        //create new row 
       $city = City::find($this->city_id);

       //send values to database
       $city->title = $this->title;   
       $city->description = $this->description ; 

       if($this->mainImage !== null){
                     //upload image

            // to get the original name of the image for example test.png
            $imageName      = $this->mainImage->getClientOriginalName();

            // add random number to image for example 1213213.test.png to avoid has more than image with same name
            $imageExtention  = time() . '.' . $imageName;

            //
            $this->mainImage->storeAs('gallery',$imageExtention, 'public');
            $city->main_image= $imageExtention;  
       }



       $city->save();

       return redirect()->route('city.edit.messages');


    }
    public function render()
    {
        return view('livewire.edit-city-component')->layout('layouts.base');
    }
}
