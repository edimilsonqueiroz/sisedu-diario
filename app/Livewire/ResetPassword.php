<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;

class ResetPassword extends Component
{
    public function generateOTP()
    {
        $this->redirectRoute('validate-code');
    }

    #[Title('SISEDU-DIARIO - Alterar Senha')] 
    public function render()
    {
        return view('livewire.reset-password');
    }
}
