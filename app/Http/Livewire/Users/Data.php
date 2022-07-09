<?php

namespace App\Http\Livewire\Users;

use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up paginations
    use WithPagination;

    // Add usersList event listener
    protected $listeners = ['usersList'];

    public function render()
    {
        return view('livewire.users.data');
    }
}
