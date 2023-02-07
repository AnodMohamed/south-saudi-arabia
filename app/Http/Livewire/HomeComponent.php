<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;

class HomeComponent extends Component
{
    public function render()
    {
        //to get all cities details
        $cities = City::all();

        return view('livewire.home-component',['cities'=>$cities])->layout('layouts.base');
    }
}
