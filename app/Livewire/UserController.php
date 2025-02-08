<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\School;
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

    public function openDeleteUser(){
        $openUserDelete = count($this->form->userDelete);
        if($openUserDelete > 0){
            $this->dispatch('open-modal', name:'delete-user');
        }else{
            $this->alert('error', 'Você precisa selecionar um usuário!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }
    }

    public function deleteUser()
    {
        $userDestroy = count($this->form->userDelete);
        if($userDestroy > 0){
            $this->form->destroy();
            $this->alert('success', 'Usuário excluido com sucesso!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }else{
            $this->alert('error', 'Você não selecionou nenhum usuário!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }

       
       
    }

    public function openPermission(User $user)
    {
        $this->form->setUser($user);
        $this->dispatch('open-modal', name: 'permission');
    }

    public function openInformation(User $user)
    {
        $this->form->setUser($user);
        $this->dispatch('open-modal', name: 'information');
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
        $page = 'User';
        return view('livewire.user',[
            'page' => $page,
            'schools' => School::all(),
            'users' => User::where('name','like','%'.$this->query.'%')
            ->orwhere('email','like','%'.$this->query.'%')
            ->orwhere('cpf','like','%'.$this->query.'%')
            ->paginate(10)
        ]);
    }
}
