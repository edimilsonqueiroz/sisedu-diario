<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\User;

class ValidateCode extends Component
{
    public string $cpf = '';

    public function mount($cpf)
    {
        $user = User::where('cpf',$cpf)->get();
        if($user){
            $this->cpf = $cpf;

        }else{
            $this->redirectRoute('reset-password');
        }
        
    }

    #[Title('SISEDU-DIARIO - Validar Código')] 
    public function render()
    {
        return view('livewire.validate-code');
    }
}
