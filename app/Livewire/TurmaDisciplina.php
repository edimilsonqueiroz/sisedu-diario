<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Turma;
use Livewire\Attributes\Title;
use App\Livewire\Forms\DisciplinaForm;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Models\User;
use App\Models\Discipline;


class TurmaDisciplina extends Component
{
    use LivewireAlert;
    use WithPagination;

    public Disciplinaform $form;

    public $query = '';
    public $teachers = '';

    public Turma $turma;
    public Discipline $discipline;
    
    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function openEditDiscipline(Discipline $discipline)
    {
        $this->dispatch('open-modal', name: 'editar-disciplina');
    }

    public function save()
    {
        $this->form->setDiscipline($this->turma);
        if($this->form->store()){
            $this->alert('success', 'Disciplina cadastrada com sucesso!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }else{
            $this->alert('error', 'Erro ao cadastrar!',[
                'position' => 'top',
                'toast' => true,
                'width' => 380
            ]);
        }
        
    }

    #[Title('SISEDU-DIÁRIO - Turma Disciplinas')]
    public function render()
    {
        $page = "Disciplines";
        $disciplines = Discipline::where('turma_id', $this->turma->id)->get();
        $users = User::where('school_id',$this->turma->school_id)
        ->where('name','like','%'.$this->teachers.'%')->get();

        return view('livewire.turma-disciplina',[
            'page' => $page,
            'users' => $users,
            'disciplines' => $disciplines
        ]);
    }
}
