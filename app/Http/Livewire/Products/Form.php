<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Form extends Component
{
    // Add products public properties
    public $product_id;
    public $category_id;
    public $product_name;
    public $unit_price;

    // Setting up rules
    protected $rules;

    // Add editProduct event listener
    protected $listeners = ['editProduct'];

    // Add validations
    public function hydrate()
    {
        $this->rules = [
            'category_id' => ['required'],
            'product_name' => ['required'],
            'unit_price' => ['required']
        ];
    }

    // Close modal and reset input fields
    public function closeModal()
    {
        $this->reset();
    }

    // Add submit function for creating or updating a product
    public function submit()
    {
        // Validate inputs
        $this->validate();

        $product = $this->product_id ? Product::find($this->product_id) : new Product();

        $product->category_id = $this->category_id;
        $product->product_name = $this->product_name;
        $product->unit_price = $this->unit_price;
        $product->save();

        // Reset inputs
        $this->reset();

        $this->dispatchBrowserEvent('close-modal', [
            'modalname' => "modalFormProduct"
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => "Product has been saved successfully !"
        ]);

        $this->emit('productsList');

    }

    public function render()
    {
        return view('livewire.products.form', [
            'categories' => Category::all()
        ]);
    }
}
