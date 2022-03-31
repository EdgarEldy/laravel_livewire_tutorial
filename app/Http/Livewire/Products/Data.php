<?php

namespace App\Http\Livewire\Products;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    use WithPagination;
    
    // Add productsList listener
    public $listeners = ['productsList'];

    // Show products with categories
    public function productsList()
    {
        $products = Product::with('category')->paginate(10);
        return $products;
    }

    public function render()
    {
        return view('livewire.products.data');
    }
}
