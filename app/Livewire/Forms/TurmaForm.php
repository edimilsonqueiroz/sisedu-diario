<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Locked;
use App\Models\Turma;

class TurmaForm extends Form
{
    #[Locked] 
    public $classeId = '';

    #[Validate('required', message:'O campo escola é obrigatório')]
    public $school_id = '';

    #[Validate('required|string', message:'O campo nome é obrigatório')]
    public string $name = '';

    #[Validate('required',message:'O campo ano é obrigatório')]
    public $year = '';

    #[Validate('required', message:'O campo status é obrigatório')]
    public  $active = true;

    #[Validate('required', message:'O campo data de início é obrigatório')]
    public $startDate = '';

    #[Validate('required', message:'O campo data de conclusão é obrigatório')]
    public $endDate = '';



    public array $classeDelete = [];

    public ?Turma $turma;


    public function store()
    {
        Turma::create($this->validate());
        $this->reset();
    }
}
