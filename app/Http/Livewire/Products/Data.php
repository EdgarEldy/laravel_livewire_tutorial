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

    // Remove a product
    public function delete(Product $product)
    {
        $product->delete();

        // Add notify flash message
        $this->dispatchBrowserEvent('notify-success', [
            'message' => 'Product has been removed successfully !'
        ]);
    }

    public function render()
    {
        return view('livewire.products.data', [
            'products' => $this->productsList()
        ]);
    }
}
