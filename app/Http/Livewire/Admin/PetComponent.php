<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PetComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.pet-component')->layout('layouts.admin');
    }
}
