<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use App\Models\Student;
use Livewire\Form;

class MatriculaForm extends Form
{
    #[Validate('required', message:'O campo escola é obrigatório')]
    public $school = "";

    #[Validate('required', message:'O campo nome é obrigatório')]
    public string $name = "";

    #[Validate('required|string|unique:students', message:'O campo e-mail é obrigatório')]
    public string $email = "";

    #[Validate('required', message:'O campo telefone é obrigatório')]
    public string $telephone = "";

    #[Validate('required|min:11|max:11|string|unique:students')]
    public string $cpf = "";

    public string $rg = "";

    #[Validate('required', message:'O campo sexo é obrigatório')]
    public string $sex = "";

    #[Validate('required', message:'O campo nome do pai é obrigatório')]
    public string $fatherName = "";

    #[Validate('required', message:'O campo nome da mãe é obrigatório')]
    public string $matherName = "";

    #[Validate('required', message:'O campo data de nasicmento é obrigatório')]
    public $dateBirth = "";

    #[Validate('required', message:'O campo turma atual é obrigatório')]
    public string $current_class = "";

    public  array $studentDelete = [];

    public ?Student $student;


    public function setMatricula(Student $student)
    {
        $this->student = $student;
        $this->school = intval($student->school_id);
        $this->name = $student->name;
        $this->email = $student->email;
        $this->telephone = $student->telephone;
        $this->cpf = $student->cpf;
        $this->rg = $student->rg;
        $this->sex = $student->sex;
        $this->fatherName = $student->fatherName;
        $this->matherName = $student->matherName;
        $this->dateBirth = $student->dateBirth;
        $this->current_class = $student->current_class;
    }

    public function store()
    {
        $this->validate();
        Student::create([
            'school_id' => $this->school,
            'name' => $this->name,
            'email' => $this->email,
            'telephone' => $this->telephone,
            'cpf' => $this->cpf,
            'rg' => $this->rg,
            'sex' => $this->sex,
            'fatherName' => $this->fatherName,
            'matherName' => $this->matherName,
            'current_class' => $this->current_class
        ]);
        $this->reset();
    }
}
