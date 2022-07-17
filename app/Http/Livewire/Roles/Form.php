<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;

class Form extends Component
{
    // Public properties
    public $role_id;
    public $role_name;

    // Add editRole event listener
    protected $listeners = ['editRole'];

    public function render()
    {
        return view('livewire.roles.form');
    }
}
