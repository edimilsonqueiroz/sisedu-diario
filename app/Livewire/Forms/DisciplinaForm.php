<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;
use Livewire\Attributes\Locked;
use App\Models\Discipline;

class DisciplinaForm extends Form
{
    #[Locked] 
    public $disciplineId = '';
    
    #[Validate('required|string')]
    public string $name = '';

    public ?Discipline $discipline;

    public function setDiscipline(Discipline $discipline)
    {
        $this->disciplineId = $discipline->id;
        $this->name = $discipline->name;
    }

    public function updateForm()
    {
        $this->validate();
        Discipline::where('id',$this->disciplineId)->update(['name'=>$this->name]);
    }


    public function store()
    {
        Discipline::create($this->validate());
        $this->reset();
    }
}
