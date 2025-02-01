<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\School;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Models\Student;
use App\Livewire\Forms\MatriculaForm;

class MatriculaController extends Component
{
    use LivewireAlert;
    use WithPagination;

    public MatriculaForm $form;


    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function openInfoStudent(Student $student)
    {
        $this->form->setStudent($student);
        $this->dispatch('open-modal', name:'info-aluno');
    }

    public function openEditStudent(Student $student)
    {
        $this->form->setStudent($student);
        $this->dispatch('open-modal', name:'editar-aluno');
    }

    public function update()
    {
        $this->form->updateForm();
        $this->alert('success', 'Matricula alterada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }

    public function save()
    {
        $this->form->store();
        $this->alert('success', 'Matricula realizada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }

    #[Title('SISEDU-DIÁRIO - Matrículas')] 
    public function render()
    {
        $page = "Student";
        return view('livewire.matricula',[
            "page"=>$page,
            "schools"=> School::all(),
            "students"=> Student::all()
        ]);
    }
}
