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

    public function render()
    {
        return view('livewire.orders.form');
    }
}
