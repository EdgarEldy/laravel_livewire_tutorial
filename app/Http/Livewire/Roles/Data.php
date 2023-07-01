<?php

namespace App\Http\Livewire\Roles;

use App\Models\Role;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up paginations
    use WithPagination;

    // Add rolesList event listener
    protected $listeners = ['rolesList'];

    // Add rolesList function
    public function rolesList()
    {
        $roles = Role::paginate(10);
        return $roles;
    }

    // Remove a role
    public function delete(Role $role)
    {
        $role->delete();

        // Add notify flash message
        $this->dispatchBrowserEvent('notify-success', [
            'message' => 'Role has been removed successfully !'
        ]);
    }

    public function render()
    {
        return view('livewire.roles.data', [
            'roles' => $this->rolesList()
        ]);
    }
}
