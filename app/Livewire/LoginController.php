<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\LoginForm;

class LoginController extends Component
{
    public LoginForm $form;

    public function authenticate(Request $request)
    {
        $this->validate();

        $credentials = [
            'email' => $this->form->email,
            'password' => $this->form->password,
        ];
        
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return $this->redirectRoute('dashboard');
        }

        session()->flash('login', 'Email e/ou senha está incorreto!');
        
    }

    #[Title('SISEDU-DIARIO - Login')] 
    public function render()
    {
        return view('livewire.login');
    }
}
