<?php

namespace App\Http\Livewire\Roles;

use App\Models\Role;
use Livewire\Component;

class Form extends Component
{
    // Public properties
    public $role_id;
    public $name;

    // Add editRole event listener
    protected $listeners = ['editRole'];

    // Setting validation rules
    protected $rules;

    public function hydrate()
    {
        $this->rules = [
            'name' => 'required'
        ];
    }

    // Creating closeModal function and call reset function
    public function closeModal()
    {
        $this->reset();
    }

    // Add or update a role function
    public function submit()
    {
        // Validate inputs
        $this->validate();

        $role = $this->role_id ? Role::find($this->role_id) : new Role();

        $role->name = $this->name;
        $role->save();

        // Reset inputs
        $this->reset();

        $this->dispatchBrowserEvent('close-modal', [
            'modalname' => "modalFormRole"
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => "Role has been saved successfully !"
        ]);

        $this->emit('rolesList');

    }

    // Get role to update in the modal
    public function editRole(Role $role)
    {
        $this->role_id = $role->id;
        $this->name = $role->name;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        return view('livewire.roles.form');
    }
}
