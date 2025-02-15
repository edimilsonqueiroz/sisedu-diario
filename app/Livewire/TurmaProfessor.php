<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Turma;
use App\Models\User;
use App\Models\TurmaUser;
use Jantinnerezo\LivewireAlert\LivewireAlert;


class TurmaProfessor extends Component
{
    use LivewireAlert;

    public Turma $turma;

    public $teachers_school = [];
    public $teachers_class = [];


    public function addTeacherClass()
    {  
        if($this->teachers_school){
            foreach($this->teachers_school as $teacher){
                $userTurma = TurmaUser::where('turma_id', intval($this->turma->id))->where('user_id', intval($teacher))->first();
                if($userTurma){
                    
                    return $this->alert('warning', 'Professor(a) já está vinculado(a) na turma!',[
                        'position' => 'top',
                        'toast' => true,
                        'width' => 500
                    ]);
                    
                }else{
                    TurmaUser::create([
                        'turma_id' => intval($this->turma->id),
                        'user_id' => intval($teacher)
                    ]);
                    $this->teachers_school = [];
                    $this->alert('success', 'Professor(es) adicionado na turma com sucesso!',[
                        'position' => 'top',
                        'toast' => true,
                        'width' => 500
                    ]);
                }
            }
            
            
        }else{
            $this->alert('warning', 'Você precisa selecionar um(a) professor(a)',[
                'position' => 'top',
                'toast' => true,
                'width' => 500
            ]);
        }

        
       
    }

    public function removeTeacherClass()
    {
        if($this->teachers_class){
            foreach($this->teachers_class as $teacher){
                TurmaUser::where('turma_id',$this->turma->id)->where('user_id', intval($teacher))->delete();
            }
            $this->alert('success', 'Professor(es) removido da turma com sucesso!',[
                'position' => 'top',
                'toast' => true,
                'width' => 500
            ]);
            $this->teachers_class = [];
        }else{
            $this->alert('warning', 'Você precisa selecionar um(a) professor(a) para remover',[
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

    #[Title('SISEDU-DIÁRIO - Turma Professores')]
    public function render()
    {
        $page = "TurmaProfessor";
        $teachers = User::where('school_id', intval($this->turma->school_id))->get();
        

        return view('livewire.turma-professor',[
            "page" => $page,
            "teachers" => $teachers,
            "teachers_turma" => $this->turma->teachers()->get()
        ]);
    }
}
