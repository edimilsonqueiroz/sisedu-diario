<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Livewire\Forms\TurmaForm;
use App\Models\School;
use App\Models\Turma;

class TurmaController extends Component
{
    use LivewireAlert;
    use WithPagination;
    
    public TurmaForm $form;

    public string $query = '';

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function openDeleteTurma()
    {
        $openTurmaDelete = count($this->form->turmaDelete);
        if($openTurmaDelete > 0){
            $this->dispatch('open-modal', name:'delete-turma');
        }else{
            $this->alert('error', 'Você precisa selecionar uma turma!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }
    }

    public function deleteTurma()
    {
        $turmaDestroy = count($this->form->turmaDelete);
        if($turmaDestroy > 0){
            $this->form->destroy();
            $this->alert('success', 'Registro excluido com sucesso!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }else{
            $this->alert('error', 'Você não selecionou nenhum registro!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }
    }

    public function openEditTurma(Turma $turma)
    {
        $this->form->setTurma($turma);
        $this->dispatch('open-modal', name: 'editar-turma');
    }

    public function update()
    {
        $this->form->updateForm();
        $this->alert('success', 'Turma alterada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }

    public function save()
    {
        $this->form->store();
        $this->alert('success', 'Turma cadastrada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }

    #[Title('SISEDU-DIÁRIO - Turmas')] 
    public function render()
    {
        $page = "Classes";
        $schools = School::all();
        $turmas = Turma::all();

        return view('livewire.turma',[
            'page' => $page,
            'schools' => $schools,
            'turmas' => $turmas
        ]);
    }
}
