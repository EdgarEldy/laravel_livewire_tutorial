<?php

namespace App\Http\Livewire\Orders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Form extends Component
{
    // Add orders public properties
    public $order_id;
    public $customer_id;
    public $category_id;
    public $product_id;
    public $qty = 1;
    public $unit_price;
    public $total;

    // Setting up rules
    protected $rules;

    // Add editOrder event
    protected $listeners = ['editOrder'];

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
        $order->product_id = $this->product_id;
        $order->qty = $this->qty;
        $order->total = $this->total;

        $order->save();

        // Reset validations
        $this->reset();

        $this->dispatchBrowserEvent('close-modal', [
            'modalname' => 'modalFormOrder'
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => 'Order has been saved successfully !'
        ]);

        // Show orders data after submit
        $this->emit('ordersList');
    }

    // Getting products once a user select a category
    public function getProductsByCategoryId()
    {
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.id', $this->category_id)
            ->select(DB::raw('products.id, product_name, unit_price'))
            ->get();

        return $products;
    }

    // Get order to update in the modal
    public function editOrder(Order $order)
    {
        $this->order_id = $order->id;
        $this->customer_id = $order->customer_id;
        $this->category_id = $order->category_id;
        $this->product_id = $order->product_id;
        $this->unit_price = $order->unit_price;
        $this->qty = $order->qty;
        $this->total = $order->total;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        // Get unit price without loading order form
        $product = Product::find($this->product_id);
        $this->unit_price = isset($product->id) ? $product->unit_price : 0;

        // Calculate the total
        $this->total = $this->qty > 0 ? $this->qty * $this->unit_price : 1;

        return view('livewire.orders.form', [
            'customers' => Customer::all(),
            'categories' => Category::all(),
            'products' => $this->getProductsByCategoryId()
        ]);
    }
}
