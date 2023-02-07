<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AddMessageComponent extends Component
{
    public function render()
    {
        return view('livewire.add-message-component')->layout('layouts.base');
    }
}
