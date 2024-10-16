<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\School;

class EscolaForm extends Form
{
    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required|email|string|unique:schools')]
    public string $email = '';

    #[Validate('required|string')]
    public string $endereco = '';

    #[Validate('required|string')]
    public string $telefone = '';

    public array $schoolDelete = [];


  public function store()
  {
    School::create($this->validate());
    $this->reset();
  }

}
