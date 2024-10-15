<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class TurmaController extends Component
{
    #[Title('SISEDU-DIÁRIO - Turmas')] 
    public function render()
    {
        $page = "Classes";
        return view('livewire.turma',[
            'page' => $page,
        ]);
    }
}
