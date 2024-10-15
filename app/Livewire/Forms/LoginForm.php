<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginForm extends Form
{
    #[Validate('required|email|string')]
    public $email = '';
 
    #[Validate('required|min:5|string')]
    public $password = '';
}
