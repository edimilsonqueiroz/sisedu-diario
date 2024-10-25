<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class TurmaDisciplina extends Component
{
    #[Title('SISEDU-DIÁRIO - Turma x Disciplina')] 
    public function render()
    {
        $page = "TurmaDisciplina";
        return view('livewire.turma-disciplina',[
            'page'=>$page
        ]);
    }
}
