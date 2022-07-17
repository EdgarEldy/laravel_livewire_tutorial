<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;

class Form extends Component
{
    // Public properties
    public $role_id;
    public $role_name;

    public function render()
    {
        return view('livewire.roles.form');
    }
}
