<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;

class Form extends Component
{
    // Add orders public properties
    public $order_id;
    public $customer_id;
    public $category;
    public $product_id;
    public $product;
    public $qty;
    public $total;

    // Setting up rules
    protected $rules;

    // Add ordersList listener
    protected $listeners = ['ordersList'];

    // Add validations
    public function hydrate()
    {
        $this->rules = [
            'customer_id' => 'required',
            'category_id' => 'required',
            'product_id' => 'required',
            'qty' => 'required',
            'unit_price' => 'required',
            'total' => 'required'
        ];
    }

    public function render()
    {
        return view('livewire.orders.form');
    }
}
