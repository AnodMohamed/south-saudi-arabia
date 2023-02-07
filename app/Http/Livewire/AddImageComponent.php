<?php

namespace App\Http\Livewire;

use App\Models\Image;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddImageComponent extends Component
{
    use WithFileUploads;

    public $city_id;
    public $image;
    public $description;
    public $subcity_id;


    public function mount($subcity_id){
        $this->subcity_id = $subcity_id;
    }

    public function store()
    {  
   
        //create new row 
       $image = new Image();
       $image->subcity_id = $this->subcity_id;
       $image->description = $this->description;


       //upload image

       // to get the original name of the image for example test.png
       $imageName      = $this->image->getClientOriginalName();

       // add random number to image for example 1213213.test.png to avoid has more than image with same name
       $imageExtention  = time() . '.' . $imageName;

       //
       $this->image->storeAs('gallery',$imageExtention, 'public');
       $image->image= $imageExtention;  


       $image->save();

       return redirect()->route('city.add.image.messages');


    }


    public function render()
    {
        return view('livewire.add-image-component')->layout('layouts.base');
    }
}
