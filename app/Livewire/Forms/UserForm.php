<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Livewire\Attributes\Locked;
use Livewire\Form;
use App\Models\User;
use Exception;

class UserForm extends Form
{
    #[Locked] 
    public $userId = '';
    #[Validate('required|string')]
    public string $name = '';

    #[Validate('required', message:'O campo escola é obrigatório')]
    public $school_id = '';

    #[Validate('required|email|string|unique:users')]
    public string $email = '';

    #[Validate('required|min:11|max:11|string|unique:users')]
    public string $cpf = '';

    #[Validate('required|min:11|max:11|string|unique:users')]
    public string $whatsapp = '';

    #[Validate('required|min:5|string')]
    public string $password = '';

    public bool $isAdmin = false;
    public bool $isProfessor = false;
    public bool $isCoordenador = false;
    public bool $isAdministrativo = false;
    public bool $active = false;
    public $isEscola = '';
    

    public  array $userDelete = [];

    public ?User $user;


    public function destroy()
    {
        try {

            foreach($this->userDelete as $key => $user){
                User::where('id', $key)->delete();
            }

            return true;

        } catch (Exception $e) {
            return false;
        }
        
    }
    
    public function setUser(User $user)
    {
        if($user->school_id != ''){
            $this->isEscola = "Sim";
        }

        $this->user = $user;
        $this->userId = $user->id;
        $this->name = $user->name;
        $this->school_id = $user->school_id;
        $this->email = $user->email;
        $this->cpf = $user->cpf;
        $this->whatsapp = $user->whatsapp;
        $this->isAdmin = $user->isAdmin;
        $this->isProfessor = $user->isProfessor;
        $this->isCoordenador = $user->isCoordenador;
        $this->isAdministrativo = $user->isAdministrativo;
    }

    public function updateForm()
    {
        $this->validate([
            'email' => ['required', Rule::unique('users')->ignore($this->user)],
            'cpf' => ['required', Rule::unique('users')->ignore($this->user)],
            'whatsapp' => ['required', Rule::unique('users')->ignore($this->user)]
        ]);

        if(!$this->password){
            $this->user->update([
                'name' => $this->name,
                'school_id' => $this->school_id,
                'email' => $this->email,
                'cpf' => $this->cpf,
                'whatsapp' => $this->whatsapp,
                'isAdmin' => $this->isAdmin,
                'isProfessor' => $this->isProfessor,
                'isCoordenador' => $this->isCoordenador,
                'isAdministrativo' => $this->isAdministrativo
            ]);
        }else{
            $this->password = bcrypt($this->password);
            $this->user->update([
                'name' => $this->name,
                'school_id' => $this->school_id,
                'email' => $this->email,
                'cpf' => $this->cpf,
                'whatsapp' => $this->whatsapp,
                'password' => $this->password,
                'isAdmin' => $this->isAdmin,
                'isProfessor' => $this->isProfessor,
                'isCoordenador' => $this->isCoordenador,
                'isAdministrativo' => $this->isAdministrativo
            ]);
        }
 
        
    }

    

    public function store()
    {
        $this->validate();
        User::create([
            'name' => $this->name,
            'school_id' =>$this->school_id,
            'email' => $this->email,
            'cpf' => $this->cpf,
            'whatsapp' => $this->whatsapp,
            'password' => bcrypt($this->password),
            'isAdmin' => $this->isAdmin ? $this->isAdmin : false,
            'isProfessor' => $this->isProfessor ? $this->isProfessor : false,
            'isCoordenador' => $this->isCoordenador ? $this->isCoordenador : false,
            'isAdministrativo' => $this->isAdministrativo ? $this->isAdministrativo : false,
            'active' => true
        ]);
        $this->reset();
    }

}
