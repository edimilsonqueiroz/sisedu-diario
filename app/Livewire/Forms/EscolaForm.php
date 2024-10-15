<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class EscolaForm extends Form
{
    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required|email|string|unique:schools')]
    public string $email = '';

    #[Validate('required|string')]
    public string $endereco = '';

    public array $schoolDelete = [];
}
