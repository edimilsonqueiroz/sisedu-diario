<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\School;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Livewire\Forms\MatriculaForm;

class MatriculaController extends Component
{
    use LivewireAlert;
    use WithPagination;

    public MatriculaForm $form;

    public $query = '';

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
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
            "schools"=> School::all()
        ]);
    }
}
