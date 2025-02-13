<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Turma;
use App\Models\TurmaStudent;

class TurmaAluno extends Component
{
    use LivewireAlert;

    public Turma $turma;

    public $student_turma = [];
    public $student_school = [];

    public function addStudentClass()
    {
        $this->alert('success', 'Aluno adicionado na turma com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 460
        ]);
    }

    public function removeStudentClass()
    {
        $this->alert('success', 'Aluno removido da turma com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 460
        ]);
    }

    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Aluno')]
    public function render()
    {
        $page = "TurmaAluno";
        return view('livewire.turma-aluno',[
            'page'=> $page
        ]);
    }
}
