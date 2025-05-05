<?php

namespace App\Livewire\pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.master')]
#[Title( 'Users')]
class UsersPage extends Component
{
    public function render()
    {
        return view('livewire.users-page');
    }
}
