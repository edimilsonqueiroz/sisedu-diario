<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Locked;
use Illuminate\Validation\Rule;
use App\Models\Turma;
use App\Models\Content;


class ConteudoForm extends Form
{
    #[Validate('required', message:'O campo escola é obrigatório')]
    public $school_id = "";

    #[Validate('required', message:'O campo turma é obrigatório')]
    public $turma_id = "";

    #[Validate('required', message:'O campo disciplina é obrigatório')]
    public $discipline_id = "";

    #[Validate('required', message:'O campo bimestre é obrigatório')]
    public $bimonthly = "";

    #[Validate('required', message:'O campo data é obrigatório')]
    public $date = "";

    #[Validate('required', message:'O campo conteúdo é obrigatório')]
    public $content = "";



    public function setTurma(Turma $turma) 
    {
        $this->school_id = intval($turma->school_id);
        $this->turma_id = intval($turma->id);
    }

    public function setContent()
    {

    }

    public function store()
    {
        $this->validate();
        Content::create([
            'school_id' => $this->school_id,
            'turma_id' => $this->turma_id,
            'discipline_id' => $this->discipline_id,
            'bimonthly' => intval($this->bimonthly),
            'date' => $this->date,
            'content' => $this->content
        ]);

        $this->reset();
    }
}
