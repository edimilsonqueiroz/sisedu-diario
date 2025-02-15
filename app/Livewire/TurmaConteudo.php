<?php

namespace App\Livewire;

use App\Models\Turma;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Livewire\Forms\ConteudoForm;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Models\Discipline;
use App\Models\Content;

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
        $this->alert('success', 'Conteudo cadastrado com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 400
        ]);
    }

    
    #[Title('SISEDU-DIÁRIO - Turma Conteudo')]
    public function render()
    {
        $page = "TurmaConteudo";
        $disciplines = Discipline::where('turma_id', intval($this->turma->id))->get();

        return view('livewire.turma-conteudo',[
            "page"=>$page,
            "contents" => Content::where('turma_id', $this->turma->id)->get(),
            "disciplines" => $disciplines
        ]);
    }
}
