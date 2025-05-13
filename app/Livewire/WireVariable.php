<?php

namespace App\Livewire;

use Illuminate\Support\Str;
use Livewire\Component;

class WireVariable extends Component
{
    public $text = 'karim';
    public function randomText()
    {
        $this->text = Str::random(7);
    }

    public function testApi($name)
    {
        return [$name];
    }
    public function render()
    {
        return view('livewire.wire-variable');
    }
}
