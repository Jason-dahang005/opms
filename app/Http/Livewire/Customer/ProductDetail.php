<?php

namespace App\Http\Livewire\Customer;

use Livewire\Component;

use App\Models\Product;
use App\Models\ProductCategory;
use Cart;

class ProductDetail extends Component
{

    public function render()
    {
        $prod = Product::all();
        return view('livewire.customer.product-detail', ['prod' => $prod])->layout('layouts.customer');
    }

    public function addToCart($prod_id, $prod_name, $prod_price){
        Cart::add($prod_id, $prod_name, 1, $prod_price)->associate('App\Models\Product');
        session()->flash('success', 'Item Successfully Added To Cart');
    }
}
