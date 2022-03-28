<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;
use App\Models\Product;

class Shop extends Component
{
    public function render()
    {
        return view('livewire.customer.shop', ['prod' => Product::all()])->layout('layouts.customer');
    }
}
