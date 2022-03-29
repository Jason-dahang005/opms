<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class GoldfishComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.goldfish-component')->layout('layouts.admin');
    }
}
