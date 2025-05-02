<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreateNewUser extends Component
{

    public $name;
    public $email;
    public $password;
    public function createUser()
    {
        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        $this->reset(['name', 'email', 'password']);
        flash()->success('User saved successfully!');
    }
    public function render()
    {
        return view('livewire.create-new-user' , [
            'users' => User::all(),
        ]);
    }
}
