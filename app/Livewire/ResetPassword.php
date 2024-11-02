<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Whatsapp\Whatsapp;
use App\Models\User;

class ResetPassword extends Component
{
    use LivewireAlert;


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
            $this->redirectRoute('validate-code', ['cpf'=> $user->cpf ]);
            $this->reset();
        }else{
            $this->alert('error', 'Nenhum usuário cadastrado com CPF informado',[
                'position' => 'top',
                'toast' => true,
                'width' => 500
            ]);
        }
        
    }

    #[Title('SISEDU-DIARIO - Alterar Senha')] 
    public function render()
    {
        return view('livewire.reset-password');
    }
}
