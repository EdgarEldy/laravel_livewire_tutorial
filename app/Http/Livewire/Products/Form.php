<?php

namespace App\Http\Livewire\Products;

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

    public function render()
    {
        return view('livewire.products.form');
    }
}
