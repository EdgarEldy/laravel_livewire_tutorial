<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;

class Form extends Component
{
    // Add users public properties
    public $user_id;
    public $first_name;
    public $last_name;
    public $tel;
    public $email;
    public $address;
    public $password;
    public $confirm_password;

    // Setting up validation rules
    protected $rules;

    // Add editUser event listener
    protected $listeners = ['editUser'];

    public function hydrate()
    {
        $this->rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'tel' => ['required'],
            'email' => ['required|email'],
            'address' => ['required'],
            'password' => ['required'],
            'confirm_password' => ['required|same:password'],
        ];
    }

    // Creating closeModal function and call reset function
    public function closeModal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.users.form');
    }
}
