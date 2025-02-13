<?php

namespace App\Livewire;

use App\Models\Turma;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\ConteudoForm;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;

class TurmaConteudo extends Component
{
    use LivewireAlert;
    use WithPagination;

    public Turma $turma;
    public ConteudoForm $form;

    public $query = '';

    public function mount(Turma $turma)
    {
        $this->turma =  $turma;
    }

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function save()
    {
        $this->form->setTurma($this->turma);
        $this->form->store();
    }

    
    #[Title('SISEDU-DIÁRIO - Turma Conteudo')]
    public function render()
    {
        $page = "TurmaConteudo";
        return view('livewire.turma-conteudo',[
            "page"=>$page
        ]);
    }
}
