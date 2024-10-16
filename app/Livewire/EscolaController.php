<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Livewire\Forms\EscolaForm;
use App\Models\School;

class EscolaController extends Component
{

    use LivewireAlert;
    use WithPagination;
    
    public EscolaForm $form;

    public string $query = '';

    #[On('close-modal')] 
    public function resetForm()
    {
        $this->form->reset();
    }

    public function save()
    {
        $this->form->store();
        $this->alert('success', 'Escola cadastrada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
    }

    #[Title('SISEDU-DIÁRIO - Escolas')] 
    public function render()
    {
        $page = 'Schools';
        return view('livewire.escola',[
            'page' => $page,
            'schools' => School::where('name','like','%'.$this->query.'%')
            ->orwhere('email','like','%'.$this->query.'%')
            ->paginate(10)
        ]);
    }
}
