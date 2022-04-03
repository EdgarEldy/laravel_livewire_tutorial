<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up pagination trait
    use WithPagination;

    public function render()
    {
        return view('livewire.customers.data');
    }
}
