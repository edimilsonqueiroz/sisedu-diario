<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Livewire\Forms\UserForm;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On; 

class UserController extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $query = '';
    public UserForm $form;


    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }
    
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
            'page' => $page,
            'users' => User::where('name','like','%'.$this->query.'%')->paginate(2)
        ]);
    }
}
