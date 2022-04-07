<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{

    use WithPagination;
    // Add ordersList listener
    public $listeners = ['ordersList'];

    // Show orders with customers and products
    public function ordersList()
    {
        $orders = Order::with(['customer', 'product'])->paginate(10);
        return $orders;
    }

    public function render()
    {
        return view('livewire.orders.data', [
            'orders' => $this->ordersList()
        ]);
    }
}
