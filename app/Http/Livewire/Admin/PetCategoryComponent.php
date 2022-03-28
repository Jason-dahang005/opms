<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class PetCategoryComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.pet-category-component')->layout('layouts.admin');
    }
}
