<?php

namespace App\Livewire;

use App\Livewire\Forms\ContactUsForm;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Phone;
use Livewire\Attributes\Computed;
use Livewire\Component;

class ContactForm extends Component
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
        return view('livewire.contact-form');
    }
}
