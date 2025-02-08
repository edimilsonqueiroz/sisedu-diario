<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Turma;
use Livewire\Attributes\Title;
use App\Livewire\Forms\DisciplinaForm;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;


class TurmaDisciplina extends Component
{
    use LivewireAlert;
    use WithPagination;

    public Disciplinaform $form;

    public $query = '';

    public Turma $turma;
    
    public function mount(Turma $turma)
    {
        $this->turma = $turma;
    }

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function save()
    {
        $this->form->store();
        $this->alert('success', 'Disciplina cadastrada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    
    }

    #[Title('SISEDU-DIÁRIO - Turma Disciplinas')]
    public function render()
    {
        $page = "Disciplines";
        return view('livewire.turma-disciplina',[
            'page' => $page
        ]);
    }
}
