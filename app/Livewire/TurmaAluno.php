<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Turma;

class TurmaAluno extends Component
{
    public Turma $turma;

    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Aluno')]
    public function render()
    {
        $page = "TurmaAluno";
        return view('livewire.turma-aluno',[
            'page'=> $page
        ]);
    }
}
