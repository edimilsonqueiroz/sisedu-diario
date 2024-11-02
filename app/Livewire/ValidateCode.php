<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use App\Models\User;
use App\Whatsapp\Whatsapp;

class ValidateCode extends Component
{
    public User $user;

    #[Validate('required|min:1|max:1')]
    public $code_1 = '';

    #[Validate('required|min:1|max:1')]
    public $code_2 = '';

    #[Validate('required|min:1|max:1')]
    public $code_3 = '';

    #[Validate('required|min:1|max:1')]
    public $code_4 = '';

    #[Validate('required|min:1|max:1')]
    public $code_5 = '';

    #[Validate('required|min:1|max:1')]
    public $code_6 = '';


    public function mount($cpf)
    {
        $this->user = User::where('cpf', $cpf)->first();

        if(!$this->user){
            $this->redirectRoute('reset-password');
        }

    }

    public function generatePasswordAction()
    {
        $this->validate();
        $code_validate = intval($this->code_1.$this->code_2.$this->code_3.$this->code_4.$this->code_5.$this->code_6);
        
        
        if($code_validate === intval($this->user->verification_code)){
            $password = $this->generatePassword(6);
            $passwordDB = bcrypt($password);
            
            $message = "Olá ".$this->user->name." essa é a sua senha temporária: ".$password." por questões de segurança altere essa senha assim que logar no sistema";

            Whatsapp::message("55".$this->user->whatsapp, $message);

            User::where('id',$this->user->id)->update([
                'verification_code'=> null,
                'password'=> $passwordDB
            ]);

            $this->reset();

            $this->redirectRoute('login');
        }else{
            session()->flash('validate-code', 'O codigo informado não é o codigo enviado pelo sistema!');
        }
        
    }

    public function generatePassword($tamanho) {
        $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $senha = '';
    
        for ($i = 0; $i < $tamanho; $i++) {
            $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
        }
    
        return $senha;
    }
    

    #[Title('SISEDU-DIARIO - Validar Código')] 
    public function render()
    {
        return view('livewire.validate-code');
    }
}
