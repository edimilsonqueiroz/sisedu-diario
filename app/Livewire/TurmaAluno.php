<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use App\Models\Turma;
use App\Models\StudentTurma;
use App\Models\Student;

class TurmaAluno extends Component
{
    use LivewireAlert;

    public Turma $turma;

    public $student_turma = [];
    public $student_school = [];

    public function addStudentClass()
    {
        if($this->student_school){

            foreach($this->student_school as $student){
                $student_class = StudentTurma::where('student_id', intval($student))->where('turma_id', intval($this->turma->id))->first();
                if($student_class){
                    return $this->alert('warning', 'Aluno(s) já vinculado(s) à turma!',[
                        'position' => 'top',
                        'toast' => true,
                        'width' => 460
                    ]);
                }else{
                    StudentTurma::create([
                        'student_id' => intval($student),
                        'turma_id' => intval($this->turma->id)
                    ]);
                    Student::where('id', intval($student))->update(['enturmacao' => true]);
                    $this->student_school = [];
                    $this->alert('success', 'Aluno(s) adicionado(s) na turma com sucesso!',[
                        'position' => 'top',
                        'toast' => true,
                        'width' => 500
                    ]);
                    
                }
                
            }

        }else{
            $this->alert('warning', 'Você precisa selecionar ao menos um aluno!',[
                'position' => 'top',
                'toast' => true,
                'width' => 460
            ]);
        }
    }

    public function removeStudentClass()
    {
        if($this->student_turma){
            foreach($this->student_turma as $student){
                StudentTurma::where('student_id',intval($student))->where('turma_id', intval($this->turma->id))->delete();
                Student::where('id', intval($student))->update(['enturmacao' => false]);
            }
            $this->alert('success', 'Aluno(s) removido(s) da turma com sucesso!',[
                'position' => 'top',
                'toast' => true,
                'width' => 500
            ]);
            $this->student_turma = [];
        }else{
            $this->alert('warning', 'Selecione ao menos um(a) aluno(a) para remover',[
                'position' => 'top',
                'toast' => true,
                'width' => 500
            ]);
        }
    }

    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[Title('SISEDU-DIÁRIO - Turma Aluno')]
    public function render()
    {
        $page = "TurmaAluno";
        $students  = Student::where('status','Ativo')->where('school_id', $this->turma->school->id)->where('enturmacao', false)->get();

        return view('livewire.turma-aluno',[
            'page'=> $page,
            'students' => $students,
            'students_turma' => $this->turma->students()->get()
        ]);
    }
}
