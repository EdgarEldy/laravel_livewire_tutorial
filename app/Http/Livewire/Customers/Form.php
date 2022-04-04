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

    // Define rules
    protected $rules;

    // Add editCustomer event listener
    protected $listeners = ['editCustomer'];

    // Setting up validations rules
    public function hydrate()
    {
        $this->rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'tel' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
        ];
    }

    // Creating closeModal function and call reset function
    public function closeModal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.customers.form');
    }
}
