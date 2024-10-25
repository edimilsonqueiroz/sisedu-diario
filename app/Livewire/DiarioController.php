<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class DiarioController extends Component
{
    #[Title('SISEDU-DIÁRIO - Diários')] 
    public function render()
    {
        $page = "Diario";
        return view('livewire.diario',[
            "page"=>$page
        ]);
    }
}
