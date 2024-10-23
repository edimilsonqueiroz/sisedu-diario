<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Locked;
use App\Models\Classe;

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
    public  $active = '';

    #[Validate('required', message:'O campo data de início é obrigatório')]
    public $startDate = '';

    #[Validate('required', message:'O campo data de conclusão é obrigatório')]
    public $endDate = '';



    public array $classeDelete = [];

    public ?Classe $classe;


    public function store()
    {
        $this->validate();
        Classe::create([
            'school_id'=>intval($this->school_id),
            'name'=>$this->name,
            'year'=>intval($this->year),
            'active'=>true,
            'startDate'=>date('Y-m-d',strtotime($this->startDate)),
            'endDate'=>date('Y-m-d',strtotime($this->endDate))
        ]);
        $this->reset();
    }
}
