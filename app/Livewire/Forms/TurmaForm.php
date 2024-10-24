<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Locked;
use Illuminate\Validation\Rule;
use App\Models\Turma;
use Exception;

class TurmaForm extends Form
{
    #[Locked] 
    public $turmaId = '';

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


    public array $turmaDelete = [];

    public ?Turma $turma;

    public function destroy()
    {
        try {

        foreach($this->turmaDelete as $key => $turma){
            Turma::where('id', $key)->delete();
        }

        return true;

        } catch (Exception $e) {
            return false;
        }
    }

    public function setTurma(Turma $turma)
    {
        $this->turmaId = $turma->id;
        $this->school_id = $turma->school_id;
        $this->name = $turma->name;
        $this->year = $turma->year;
        $this->active = $turma->active;
        $this->startDate = $turma->startDate;
        $this->endDate = $turma->endDate;
    }

    public function updateForm()
    {
        $this->validate();

        Turma::where('id', $this->turmaId)->update([
            'school_id'=>$this->school_id,
            'name' => $this->name,
            'year' => $this->year,
            'active' => $this->active,
            'startDate' => $this->startDate,
            'endDate' => $this->endDate
        ]);
    }


    public function store()
    {
        Turma::create($this->validate());
        $this->reset();
    }
}
