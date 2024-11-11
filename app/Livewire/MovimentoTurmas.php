<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\WithPagination;
use App\Models\Turma;
use App\Models\School;

class MovimentoTurmas extends Component
{
    use WithPagination;

    public $school = '';
    public $year = '';
    
    #[Title('SISEDU-DIARIO - Movimento Turmas')] 
    public function render()
    {
        
        $page = "MovimentoTurmas";
        return view('livewire.movimento-turmas',[
            'page'=>$page,
            'schools'=>School::all(),
            'turmas' => Turma::query()->when($this->school || $this->year, function($query){
                $query->where('school_id','like','%'.$this->school.'%')->where('year','like','%'.$this->year.'%');
            })->paginate(10)
        ]);
    }
}
