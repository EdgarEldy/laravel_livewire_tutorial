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

    public function render()
    {
        return view('livewire.users.form');
    }
}
