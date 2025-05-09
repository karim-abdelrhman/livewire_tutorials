<?php

namespace App\Livewire\pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.master')]
#[Title( 'Home')]
class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page');
    }
}
