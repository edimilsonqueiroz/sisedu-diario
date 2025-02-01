<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Turma;
use Livewire\Attributes\Title;

class TurmaDisciplina extends Component
{
    public Turma $turma;
    
    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Disciplinas')]
    public function render()
    {
        $page = "Disciplines";
        return view('livewire.turma-disciplina',[
            'page' => $page
        ]);
    }
}
