<?php

namespace App\Http\Livewire\Products;

use App\Models\Category;
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

    public function render()
    {
        return view('livewire.products.form', [
            'categories' => Category::all()
        ]);
    }
}
