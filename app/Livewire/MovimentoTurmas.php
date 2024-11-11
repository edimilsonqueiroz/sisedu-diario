<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use Livewire\Attributes\Validate;
use App\Models\Turma;
use App\Models\School;

class MovimentoTurmas extends Component
{
    use WithPagination;

    #[Validate('required')]
    public $school = '';

    #[Validate('required')]
    public $year = '';

    public function search()
    {
        $this->validate();

        $this->school = $this->school;
        $this->year = $this->year;
    }

    #[Title('SISEDU-DIARIO - Movimento Turmas')] 
    public function render()
    {
        
        $page = "MovimentoTurmas";
        return view('livewire.movimento-turmas',[
            'page'=>$page,
            'schools'=>School::all(),
            'turmas' => Turma::query()->when($this->school, function($query){
                $query->where('school_id','like','%'.$this->school.'%')->where('year','like','%'.$this->year.'%');
            })->paginate(10)
        ]);
    }
}
