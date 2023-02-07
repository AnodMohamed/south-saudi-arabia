<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Image;
use App\Models\SubCity;
use Livewire\Component;

class CityDetailsComponent extends Component
{    
    public $city_id;
    public $title;
    public $mainImage;
    public $description;

    public function mount($city_id)
    {
        
        $city = City::where('id', $city_id)->first();
        $this->title = $city->title;
        $this->mainImage = $city->main_image;
        $this->description = $city->description;
        $this->city_id=$city->id;

    }

    public function delete($city_id)
    {
        
        $city =City::find($city_id);
        $city->delete();
        return redirect()->route('city.delete.messages');
        
    }


    
    public function render()
    {
        // $images = Image::where('city_id',$this->city_id )->get();

        $subcities = SubCity::where('city_id',$this->city_id )->get();
        return view('livewire.city-details-component',['subcities'=>$subcities])->layout('layouts.base');
    }
}
