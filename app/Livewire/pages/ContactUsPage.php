<?php

namespace App\Livewire\pages;

use App\Livewire\Forms\ContactUsForm;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Phone;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
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
