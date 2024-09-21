<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Livewire\Forms\UserForm; 


class UserController extends Component
{
    use LivewireAlert;
    use WithPagination;

    public UserForm $form; 

    public $query = '';

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function openEditUser(User $user)
    {
        $this->form->setUser($user);
        $this->dispatch('open-modal', name: 'editar-usuario');
    }

    public function update()
    {
        $this->form->updateForm();
        $this->alert('success', 'Usuário alterado com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }
    
    public function save()
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
            'users' => User::where('name','like','%'.$this->query.'%')
            ->orwhere('email','like','%'.$this->query.'%')
            ->orwhere('cpf','like','%'.$this->query.'%')
            ->paginate(3)
        ]);
    }
}
