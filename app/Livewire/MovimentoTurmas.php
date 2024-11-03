<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class MovimentoTurmas extends Component
{
    #[Title('SISEDU-DIARIO - Movimento Turmas')] 
    public function render()
    {
        $page = "MovimentoTurmas";
        return view('livewire.movimento-turmas',[
            'page'=>$page
        ]);
    }
}
