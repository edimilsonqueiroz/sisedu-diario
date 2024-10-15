<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;


class Dashboard extends Component
{
    public string $page = "Dashboard";

    #[Title('SISEDU-DIÁRIO - Dashboard')] 
    public function render()
    {
        $page = 'Dashboard';
        return view('livewire.dashboard',[
            'page' => $page
        ]);
    }
}
