<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class Profile extends Component
{
    #[Title('SISEDU-DIARIO - Perfil de usuário')] 
    public function render()
    {
        $page = "Profile";
        return view('livewire.profile',[
            'page' => $page
        ]);
    }
}
