<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class DisciplinaController extends Component
{
    #[Title('SISEDU-DIÁRIO - Escolas')] 
    public function render()
    {
        $page = "Disciplines";
        return view('livewire.disciplina',[
            'page' => $page,
        ]);
    }
}
