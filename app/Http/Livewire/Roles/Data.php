<?php

namespace App\Http\Livewire\Roles;

use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up paginations
    use WithPagination;

    // Add rolesList event listener
    protected $listeners = ['rolesList'];

    public function render()
    {
        return view('livewire.roles.data');
    }
}
