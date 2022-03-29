<?php

namespace App\Http\Livewire\Products;

use Livewire\Component;

class Data extends Component
{
    // Add productsList listener
    public $listeners = ['productsList'];

    public function render()
    {
        return view('livewire.products.data');
    }
}
