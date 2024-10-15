<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use App\Livewire\Forms\EscolaForm;

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
        
    }

    #[Title('SISEDU-DIÁRIO - Escolas')] 
    public function render()
    {
        $page = 'Schools';
        return view('livewire.escola',[
            'page' => $page,
        ]);
    }
}
