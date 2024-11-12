<?php

namespace App\Livewire;

use App\Models\Turma;
use Livewire\Component;
use Livewire\Attributes\Title;

class TurmaConteudo extends Component
{
    public Turma $turma;

    public function mount(Turma $turma)
    {
        $this->turma =  $turma;
    }
    
    #[Title('SISEDU-DIÁRIO - Turma Conteudo')]
    public function render()
    {
        $page = "TurmaConteudo";
        return view('livewire.turma-conteudo',[
            "page"=>$page
        ]);
    }
}
