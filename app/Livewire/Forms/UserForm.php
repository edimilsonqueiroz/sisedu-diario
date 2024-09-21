<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Illuminate\Validation\Rule;
use Livewire\Form;
use App\Models\User;

class UserForm extends Form
{
    #[Validate('required|string')]
    public $name = '';

    #[Validate('required|email|string|unique:users')]
    public $email = '';

    #[Validate('required|min:11|max:11|string|unique:users')]
    public $cpf = '';

    #[Validate('required|min:5|string')]
    public $password = '';

    public ?User $user;


    public function setUser(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->cpf = $user->cpf;
    }

    public function updateForm()
    {
        $this->validate([
            'email' => ['required', Rule::unique('users')->ignore($this->user)],
            'cpf' => ['required', Rule::unique('users')->ignore($this->user)]
        ]);

        if(!$this->password){
            $this->user->update($this->only(['name','email','cpf']));
        }else{
            $this->password = bcrypt($this->password);
            $this->user->update($this->only(['name','email','cpf','password']));
        }
 
        
    }

    public function store()
    {
        $this->validate();
        User::create($this->all());
        $this->reset();
    }

}
