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
    public $rules;

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

    public function render()
    {
        return view('livewire.users.form');
    }
}
