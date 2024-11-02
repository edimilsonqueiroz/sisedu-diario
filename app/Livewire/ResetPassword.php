<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Whatsapp\Whatsapp;
use App\Models\User;

class ResetPassword extends Component
{
    #[Validate('required|string|min:11|max:11')]
    public string $cpf = '';

    public function generateOTP()
    {
        $this->validate();

        $user = User::where('cpf',$this->cpf)->first();

        if($user != ''){
            $code = rand(100000, 999999);
            $message = "Olá ".$user->name." você solicitou alteração de senha do sistema SISEDU-DIÁRIO, precisamos confirmar sua identidade com o código: ".$code." após a validação enviaremos sua senha provisória neste mesmo contato";
            User::where('id', $user->id)->update(['verification_code'=> intval($code)]);
            Whatsapp::message("55".$user->whatsapp, $message);
            $this->redirectRoute('validate-code', ['cpf'=> $user->cpf]);
            $this->reset();
        }else{
            session()->flash('cpf', 'Nenhum usuário encontrado com esse CPF no sistema!');
        }
        
    }

    #[Title('SISEDU-DIARIO - Alterar Senha')] 
    public function render()
    {
        return view('livewire.reset-password');
    }
}
