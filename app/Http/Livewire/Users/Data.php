<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Data extends Component
{
    // Setting up paginations
    use WithPagination;

    // Add usersList event listener
    protected $listeners = ['usersList'];

    // GET users
    public function usersList()
    {
        $users = User::paginate(10);
        return $users;
    }

    public function render()
    {
        return view('livewire.users.data', [
            'users' => $this->usersList()
        ]);
    }
}
