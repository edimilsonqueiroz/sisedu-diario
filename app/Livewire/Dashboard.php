<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;


class Dashboard extends Component
{
    public function render()
    {
        $page = "Dashboard";
        return view('livewire.dashboard',[
            "page" => $page
        ])->title('SISEDU-DIARIO Dashboard');
    }
}
