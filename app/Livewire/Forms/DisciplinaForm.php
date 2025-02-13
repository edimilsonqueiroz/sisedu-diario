<?php

namespace App\Livewire\Forms;


use Livewire\Attributes\Validate;
use Livewire\Form;
use App\Models\Turma;
use App\Models\Discipline;
use Exception;

class DisciplinaForm extends Form
{
    public ?Discipline $discipline;
    

    #[Validate('required|string')]
    public $name = '';

    #[Validate('required')]
    public $turma_id = '';

    #[Validate('required', message: 'Você precisa selecionar um professor(a)')]
    public $user_id = '';

    #[Validate('required', message:'O campo total de aulas é obrigatório')]
    public $school_days = '';

    #[Validate('required', message: 'Você precisa selecionar pelo menos 1 dia na semana')]
    public array $days_week = [];

    #[Validate('required', message: 'O campo hora de inicio é obrigatório')]
    public $start_time = '';

    #[Validate('required', message: 'O campo hora fim é obrigatório')]
    public $end_time = '';


    public function setDiscipline(Turma $turma)
    {
        $this->turma_id = $turma->id;
    }


    public function store()
    {
       $this->validate();
        try {
            Discipline::create([
                'name' => $this->name,
                'turma_id' =>intval($this->turma_id),
                'user_id' => intval($this->user_id),
                'school_days' => intval($this->school_days),
                'days_week' => implode(",", $this->days_week),
                'start_time' => $this->start_time,
                'end_time' => $this->end_time,
                'status' => 'Aberta'
            ]);
        
            $this->reset();

             return true;

        } catch (Exception $e) {
            return false;
        }
       
    }
}
