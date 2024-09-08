<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class User extends Component
{
    public function render()
    {
        $page = "User";
        return view('livewire.user',[
            'page' => $page
        ])->title('SISEDU-DIÁRIO - Usuários');
    }
}
