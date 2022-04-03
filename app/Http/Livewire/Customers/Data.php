<?php

namespace App\Http\Livewire\Customers;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up pagination trait
    use WithPagination;

    // Add customersList event listener
    protected $listeners= ['customersList'];

    // Get customers and paginate per 10
    public function customersList()
    {
        $customers = Customer::paginate(10);
        return $customers;
    }

    public function render()
    {
        return view('livewire.customers.data', [
            'customers' => $this->customersList()
        ]);
    }
}
