<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class MatriculaController extends Component
{
    #[Title('SISEDU-DIÁRIO - Matrículas')] 
    public function render()
    {
        $page = "Student";
        return view('livewire.matricula',[
            "page"=>$page
        ]);
    }
}
