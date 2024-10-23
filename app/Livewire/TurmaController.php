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
