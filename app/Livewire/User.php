<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\UserForm;

class User extends Component
{
    public UserForm $form;
    public function create()
    {
        dd($this->form);
    }
    public function render()
    {
        $page = "User";

        return view('livewire.user',[
            'page' => $page
        ])->title('SISEDU-DIÁRIO - Usuários');
    }
}
