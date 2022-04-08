<?php

namespace App\Http\Livewire\Orders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use Livewire\Component;

class Form extends Component
{
    // Add orders public properties
    public $order_id;
    public $customer_id;
    public $category_id;
    public $product_id;
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

    // Close modal and reset input fields
    public function closeModal()
    {
        $this->reset();
    }

    public function submit()
    {
        // Validate input fields
        $this->validate();

        $order = $this->order_id ? Order::find($this->order_id) : new Order();

        $order->customer_id = $this->customer_id;
        $order->product_id = $this->product;
        $order->qty = $this->qty;
        $order->total = $this->total;

        $order->save();

        // Reset validations
        $this->reset();

        $this->dispatchBrowserEvent('close-modal',[
            'modalname' => 'modalFormOrder'
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => 'Order has been saved successfully !'
        ]);
    }

    public function render()
    {
        return view('livewire.orders.form', [
            'customers' => Customer::all(),
            'categories' => Category::all()
        ]);
    }
}
