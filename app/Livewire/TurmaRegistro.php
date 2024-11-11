<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Turma;

class TurmaRegistro extends Component
{
    public Turma $turma;

    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Registro')]
    public function render()
    {
        $page = "TurmaRegistro";
        return view('livewire.turma-registro',[
            'page'=> $page,
            'turma'=>$this->turma
        ]);
    }
}
