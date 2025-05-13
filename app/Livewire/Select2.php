<?php

namespace App\Livewire;

use Livewire\Attributes\Url;
use Livewire\Component;

class Select2 extends Component
{
    #[Url(as: 'c')]
    public $companies = [];
    public function render()
    {
        return view('livewire.select2');
    }
}
