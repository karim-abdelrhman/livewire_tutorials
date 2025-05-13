<?php

namespace App\Livewire;

use App\Models\Company;
use App\Models\Phone;
use Livewire\Attributes\Computed;
use Livewire\Component;

class DropDown extends Component
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
    public function render()
    {
        return view('livewire.drop-down');
    }
}
