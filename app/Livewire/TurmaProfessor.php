<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Turma;


class TurmaProfessor extends Component
{
    public Turma $turma;

    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Professores')]
    public function render()
    {
        $page = "TurmaProfessor";
        return view('livewire.turma-professor',[
            "page" => $page,
            "turma"=> $this->turma
        ]);
    }
}
