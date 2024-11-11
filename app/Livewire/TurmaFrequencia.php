<?php

namespace App\Livewire;

use Livewire\Component;

class TurmaFrequencia extends Component
{
    public function render()
    {
        $page = "TurmaFrequencia";
        return view('livewire.turma-frequencia',[
            "page" => $page
        ]);
    }
}
