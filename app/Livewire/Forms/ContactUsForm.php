<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class ContactUsForm extends Form
{

    #[Validate('required|min:5')]
    public $name ;

    #[Validate('required|email')]
    public $email ;

    #[Validate('required|string')]
    public $message ;

//    #[Validate]
//    public function rules(): array
//    {
//        return [
//            'name' => 'required|string',
//            'email' => 'required|email',
//            'message' => 'required|string',
//        ];
//    }
}
