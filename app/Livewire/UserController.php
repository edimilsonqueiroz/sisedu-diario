<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;
use App\Livewire\Forms\UserForm;
use Jantinnerezo\LivewireAlert\LivewireAlert;

class UserController extends Component
{
    use LivewireAlert;
    public UserForm $form;
    public function create()
    {
        $this->form->store(); 

        $this->alert('success', 'Usuário cadastrado com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }

    #[Title('SISEDU-DIÁRIO - Usuários')] 
    public function render()
    {
        $page = "User";

        return view('livewire.user',[
            'page' => $page
        ]);
    }
}
