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

    public function openDeleteSchool()
    {
        $openSchoolDelete = count($this->form->schoolDelete);
        if($openSchoolDelete > 0){
            $this->dispatch('open-modal', name:'delete-escola');
        }else{
            $this->alert('error', 'Você precisa selecionar uma escola!',[
                'position' => 'top',
                'toast' => true,
                'width' => 400
            ]);
        }
    }

    public function deleteSchool()
    {
        $schoolDestroy = count($this->form->schoolDelete);
        if($schoolDestroy > 0){
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

    public function openEditSchool(School $school)
    {
        $this->form->setSchool($school);
        $this->dispatch('open-modal', name: 'editar-escola');
    }

    public function update()
    {
        $this->form->updateForm();
        $this->alert('success', 'Escola alterada com sucesso!',[
            'position' => 'top',
            'toast' => true,
            'width' => 380
        ]);
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
