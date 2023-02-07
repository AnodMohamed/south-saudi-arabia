<?php

namespace App\Http\Livewire;

use App\Models\Image;
use App\Models\SubCity;
use Livewire\Component;

class ViewSubCityComponent extends Component
{
    public $title;
    public $mainImageSubcity;
    public $subcity_id;


    public function mount($subcity_id)
    {
        
        $subcity = SubCity::where('id', $subcity_id)->first();
        $this->title = $subcity->title;
        $this->mainImageSubcity = $subcity->main_image_sub;
        $this->subcity_id = $subcity->id;

    }


    public function delete($subcity_id)
    {
        
        $subcity =SubCity::find($subcity_id);
        $subcity->delete();
        return redirect()->route('subcity.delete.messages');
        
    }

    public function deleteimage($id)
    {
        
        $image =Image::find($id);
        $image->delete();
        return redirect()->route('city.delete.image.messages');
        
    }

    public function render()
    {
       $images = Image::where('subcity_id', $this->subcity_id )->get();

        return view('livewire.view-sub-city-component',['images'=>$images])->layout('layouts.base');
    }
}
