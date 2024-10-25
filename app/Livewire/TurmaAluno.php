<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class TurmaAluno extends Component
{
    #[Title('SISEDU-DIÁRIO - Turma x Aluno')] 
    public function render()
    {
        $page = "TurmaAluno";
        return view('livewire.turma-aluno',[
            'page'=>$page
        ]);
    }
}
