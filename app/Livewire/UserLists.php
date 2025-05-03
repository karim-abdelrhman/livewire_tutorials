<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class UserLists extends Component
{
    public function render()
    {
        return view('livewire.user-lists' , [
            'users' => User::orderBy('id', 'DESC')->paginate(3),
        ]);
    }
}
