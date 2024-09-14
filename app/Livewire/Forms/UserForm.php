<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class UserForm extends Form
{
    #[Validate('required|string')]
    public $name = '';

    #[Validate('required|email|string')]
    public $email = '';

    #[Validate('required|min:11|max:11|string')]
    public $cpf = '';

    #[Validate('required|min:5|string')]
    public $password = '';
}
