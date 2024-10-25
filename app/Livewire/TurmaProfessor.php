<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class TurmaProfessor extends Component
{
    #[Title('SISEDU-DIÁRIO - Turma x Professor')] 
    public function render()
    {
        $page = "TurmaProfessor";
        return view('livewire.turma-professor',[
            "page"=>$page
        ]);
    }
}
