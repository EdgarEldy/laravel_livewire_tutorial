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

    // Setting validation rules
    protected $rules;

    public function hydrate()
    {
        $this->rules = [
            'role_name' => 'required'
        ];
    }

    // Creating closeModal function and call reset function
    public function closeModal()
    {
        $this->reset();
    }

    public function render()
    {
        return view('livewire.roles.form');
    }
}
