<?php

namespace App\Livewire\pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Layout('layouts.master')]
#[Title( 'Contact Us')]
class ContactUsPage extends Component
{
    public function render()
    {
        return view('livewire.contact-us-page');
    }
}
