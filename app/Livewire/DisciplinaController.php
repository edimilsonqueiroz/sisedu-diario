<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Livewire\Forms\DisciplinaForm;
use App\Models\Discipline;

class DisciplinaController extends Component
{
    use LivewireAlert;
    use WithPagination;
    
    public DisciplinaForm $form;

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function openEditDiscipline(Discipline $discipline)
    {
        $this->form->setDiscipline($discipline);
        $this->dispatch('open-modal', name: 'editar-disciplina');
    }

    public function update()
    {
        $this->form->updateForm();
        $this->alert('success', 'Disciplina alterada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 400
        ]);
    }


    public function save(){
        $this->form->store();
        $this->alert('success', 'Disciplina cadastrada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 400
        ]);
    }

    public string $query = '';
    #[Title('SISEDU-DIÁRIO - Escolas')] 
    public function render()
    {
        $page = "Disciplines";
        $disciplines = Discipline::all();

        return view('livewire.disciplina',[
            'page' => $page,
            'disciplines' => $disciplines
        ]);
    }
}
