<?php

namespace App\Http\Livewire;

use Livewire\Component;

class EditMessageComponent extends Component
{
    public function render()
    {
        return view('livewire.edit-message-component')->layout('layouts.base');
    }
}
