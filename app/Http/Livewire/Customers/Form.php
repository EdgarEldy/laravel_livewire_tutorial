<?php

namespace App\Http\Livewire\Customers;

use App\Models\Customer;
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

    // Creating submit function for creating or updating a customers
    public function submit()
    {
        // Validate inputs
        $this->validate();

        $customer = $this->customer_id ? Customer::find($this->customer_id) : new Customer();

        $customer->first_name = $this->first_name;
        $customer->last_name = $this->last_name;
        $customer->tel = $this->tel;
        $customer->email = $this->email;
        $customer->address = $this->address;
        $customer->save();

        // Reset inputs
        $this->reset();

        $this->dispatchBrowserEvent('close-modal', [
            'modalname' => "modalFormCustomer"
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => "Customer has been saved successfully !"
        ]);

        $this->emit('customersList');

    }

    public function render()
    {
        return view('livewire.customers.form');
    }
}
