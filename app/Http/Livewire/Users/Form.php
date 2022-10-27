<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
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
    protected $rules;

    // Add editUser event listener
    protected $listeners = ['editUser'];

    public function hydrate()
    {
        $this->rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'tel' => ['required'],
            'email' => ['required'],
            'address' => ['required'],
            'password' => ['required'],
        ];
    }

    // Creating closeModal function and call reset function
    public function closeModal()
    {
        $this->reset();
    }


    // Submit function for creating or updating a user
    public function submit()
    {
        // Validate inputs
        $this->validate();

        $user = $this->user_id ? User::find($this->user_id) : new User();

        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->tel = $this->tel;
        $user->email = $this->email;
        $user->address = $this->address;
        $user->password = Hash::make($this->password);
        $user->save();

        // Reset inputs
        $this->reset();

        $this->dispatchBrowserEvent('close-modal', [
            'modalname' => "modalFormUser"
        ]);

        $this->dispatchBrowserEvent('notify-success', [
            'message' => "User has been created successfully !"
        ]);

        $this->emit('usersList');

    }

    // Get user's data to update in the modal
    public function editUser(User $user)
    {
        $this->user_id = $user->id;
        $this->first_name = $user->first_name;
        $this->last_name = $user->last_name;
        $this->tel = $user->tel;
        $this->email = $user->email;
        $this->address = $user->address;

        $this->dispatchBrowserEvent('open-modal');
    }

    public function render()
    {
        return view('livewire.users.form');
    }
}
