<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\User;

class UserForm extends Form
{
    #[Validate('required|string')]
    public $name = '';

    #[Validate('required|email|string|unique:users')]
    public $email = '';

    #[Validate('required|min:11|max:11|string|unique:users')]
    public $cpf = '';

    #[Validate('required|min:5|string')]
    public $password = '';

    public function store()
    {
        $this->validate();
        User::create($this->all());
        $this->reset(); 
    }
}
