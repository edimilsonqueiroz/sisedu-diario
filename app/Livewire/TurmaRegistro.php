<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Turma;
use App\Models\User;

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
        $teachers = User::where('isProfessor', true)->get();
        
        return view('livewire.turma-registro',[
            'page'=> $page,
            'turma'=>$this->turma,
            'teachers'=> $teachers
        ]);
    }
}
