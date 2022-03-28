<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ReservationComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.reservation-component')->layout('layouts.admin');
    }
}
