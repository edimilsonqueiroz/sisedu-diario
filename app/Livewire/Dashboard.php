<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard')->title('SISEDU-DIARIO - dashboard');
    }
}
