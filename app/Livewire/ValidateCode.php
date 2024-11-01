<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ValidateCode extends Component
{
    #[Title('SISEDU-DIARIO - Validar Código')] 
    public function render()
    {
        return view('livewire.validate-code');
    }
}
