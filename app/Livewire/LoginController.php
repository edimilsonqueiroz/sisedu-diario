<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\LoginForm;

class LoginController extends Component
{
    public LoginForm $form;

    public function authenticate(){

    }

    #[Title('SISEDU-DIARIO - Login')] 
    public function render()
    {
        return view('livewire.login');
    }
}
