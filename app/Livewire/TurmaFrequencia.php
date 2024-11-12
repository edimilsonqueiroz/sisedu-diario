<?php

namespace App\Livewire;

use App\Models\Turma;
use Livewire\Component;
use Livewire\Attributes\Title;

class TurmaFrequencia extends Component
{
    public Turma $turma;
    
    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Frequência')]
    public function render()
    {
        $page = "TurmaFrequencia";
        return view('livewire.turma-frequencia',[
            "page" => $page,
            "turma"=> $this->turma
        ]);
    }
}
