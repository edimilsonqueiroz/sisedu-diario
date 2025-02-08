<?php

namespace App\Livewire\Forms;

use App\Models\Discipline;
use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Locked;
use Illuminate\Validation\Rule;

class DisciplinaForm extends Form
{
    

    #[Validate('required|string')]
    public $name = '';

    #[Validate('required')]
    public $turma_id = '';

    #[Validate('required')]
    public $user_id = '';

    #[Validate('required')]
    public $school_days = '';

    #[Validate('required')]
    public $start_time = '';

    #[Validate('required')]
    public $end_time = '';

    public ?Discipline $discipline;


    public function store()
    {
        $this->validate();

        Discipline::created([
            'name' => $this->name,
            'turma_id' => $this->turma_id,
            'user_id' => $this->user_id,
            'school_days' => $this->school_days,
            'start_time' => $this->start_time,
            'end_time' => $this->end_time
        ]);

        $this->reset();
    }
}
