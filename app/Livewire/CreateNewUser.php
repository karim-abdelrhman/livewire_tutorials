<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CreateNewUser extends Component
{
    use withPagination , withFileUploads;

    #[validate('required' , message: 'please enter a name')]
    #[validate('min:3' , message: 'please note that the name must be at least 3 characters long')]
    public $name;

    #[validate('required' , message: 'please enter an email')]
    #[validate('email' , message: 'please enter a valid email')]
    public $email;

    #[validate('required' , message: 'please enter a password')]
    #[validate('min:8' , message: 'please note that the password must be at least 8 characters long')]
    public $password;

    #[validate('image' , message: 'please upload an image')]
    #[validate('mimes:jpg,jpeg,png' , message: 'please upload a valid image')]
    public $image;
    public function createUser()
    {
        $validatedData = $this->validate();
        if($this->image){
            $validatedData['image'] = $this->image->store('users' , 'public');;
        }
        User::create($validatedData);
        $this->reset(['name', 'email', 'password' , 'image']);
        flash()->success('User saved successfully!');
    }
    public function render()
    {
        return view('livewire.create-new-user');
    }
}
