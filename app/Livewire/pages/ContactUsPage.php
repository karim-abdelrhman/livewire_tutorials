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

    public $companyId;
    public $phoneId;

    #[Computed()]
    public function companies()
    {
        return Company::all();
    }

    #[Computed()]
    public function phones()
    {
        return Phone::where('company_id' , $this->companyId)->get();
    }
    public function updatedCompanyId()
    {
        $this->phoneId = null;
    }



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
