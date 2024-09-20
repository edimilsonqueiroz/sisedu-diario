<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On; 


class UserController extends Component
{
    use LivewireAlert;
    use WithPagination;

    public $query = '';


    #[Validate('required|string')]
    public $name = '';

    #[Validate('required|email|string|unique:users')]
    public $email = '';

    #[Validate('required|min:11|max:11|string|unique:users')]
    public $cpf = '';

    #[Validate('required|min:5|string')]
    public $password = '';


    #[On('close-modal')] 
    public function resetForm()
    {
        $this->reset();
    }
    
    public function store()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'password' => bcrypt($this->password)
        ]);

        $this->reset(); 

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
            'users' => User::where('name','like','%'.$this->query.'%')->paginate(10)
        ]);
    }
}
