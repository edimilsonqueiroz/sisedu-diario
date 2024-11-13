<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Turma;

class TurmaNota extends Component
{
    public Turma $turma;

    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Notas')]
    public function render()
    {
        $page = "TurmaNota";
        return view('livewire.turma-nota',[
            "page" => $page
        ]);
    }
}
