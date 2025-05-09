<?php

namespace App\Livewire\pages;

use App\Livewire\Forms\ContactUsForm;
use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

#[Layout('layouts.master')]
#[Title( 'Contact Us')]
class ContactUsPage extends Component
{


    public ContactUsForm $form;
    public function submitForm()
    {
        $data = $this->validate();
        Contact::create($data);
        $this->form->reset();
        flash()->success('Your message has been sent successfully!');
    }
    public function render()
    {
        return view('livewire.contact-us-page');
    }
}
