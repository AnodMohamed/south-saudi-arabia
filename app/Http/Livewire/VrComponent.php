<?php

namespace App\Http\Livewire;

use App\Models\City;
use Livewire\Component;

class VrComponent extends Component
{
    public $name;
    public function mount($image)
    {
        $this->name=$image;
    }

    public function render()
    {
        return view('livewire.vr-component')->layout('layouts.vr');
    }
}



