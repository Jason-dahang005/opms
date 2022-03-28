<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

use App\Models\Product;
use App\Models\ProductCategory;

class ProductDetail extends Component
{

    public function render()
    {
        $prod = Product::all();
        return view('livewire.customer.product-detail', ['prod' => $prod])->layout('layouts.customer');
    }
}
