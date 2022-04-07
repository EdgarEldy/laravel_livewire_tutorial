<?php

namespace App\Http\Livewire\Orders;

use Livewire\Component;

class Data extends Component
{

    // Add ordersList listener
    public $listeners = ['ordersList'];

    public function render()
    {
        return view('livewire.orders.data');
    }
}
