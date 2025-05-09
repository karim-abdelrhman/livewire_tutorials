<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserLists extends Component
{
    public $search;
    public User $user;

    public function mount(User $user)
    {
        $this->user = $user;
    }
    public function render()
    {
        return view('livewire.user-lists' , [
            'users' => User::where('name' , 'like' , "%{$this->search}%")->paginate(3),
            'user' => $this->user,
        ]);
    }
}
