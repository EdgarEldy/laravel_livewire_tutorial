<?php

namespace App\Http\Livewire\Customers;

use Livewire\Component;

class Form extends Component
{
    // Add customers public properties
    public $customer_id;
    public $first_name;
    public $last_name;
    public $tel;
    public $email;
    public $address;

    public function render()
    {
        return view('livewire.customers.form');
    }
}
