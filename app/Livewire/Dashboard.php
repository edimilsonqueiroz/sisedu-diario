<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;

class Dashboard extends Component
{
    public string $page = "Dashboard";
    
    #[Title('SISEDU-DIÁRIO - Dashboard')] 
    public function render()
    {
        $page = 'Dashboard';
        $chartBar = Chartjs::build()
         ->name('barChartTest')
         ->type('bar')
         ->labels(['5º ANO', '6º ANO', '7º ANO','8º ANO', '9º ANO'])
         ->datasets([
             [
                 "label" => "REPROVAÇÃO POR TURMA",
                 'backgroundColor' => ['#527aba', '#527aba','#527aba','#527aba','#527aba'],
                 'data' => [15, 12, 20, 19, 5]
             ]
         ])
         ->options([
            "responsive"=>true,
            "maintainAspectRatio"=>false,
            "scales" => [
                "y" => [
                    "beginAtZero" => true,
                    ]
                ]
         ]);

         $chartPier = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->labels(['5º ANO', '6º ANO', '7º ANO','8º ANO', '9º ANO'])
        ->datasets([
            [
                'label'=>'MATRICULAS POR TURMA',
                'backgroundColor' => ['#FF6384', '#36A2EB','#32a852','#8f32a8','#ed2f33'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [69, 59, 10, 25, 30]
            ]
        ])
        ->options([
            "responsive"=>true,
            "showAllTooltips"=> true,
            "maintainAspectRatio"=>false,
            "scales" => [
                "y" => [
                    "beginAtZero" => true,
                    ]
                ]
        ]);

        $chartLine = Chartjs::build()
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['5º ANO', '6º ANO', '7º ANO','8º ANO', '9º ANO'])
        ->datasets([
            [
                "label" => "TOTAL DE EVASÃO POR TURMA",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                "data" => [65, 59, 80, 81, 56, 55],
                "fill" => false,
            ]
        ])
        ->options([
            "responsive"=>true,
            "maintainAspectRatio"=>false,
            "scales" => [
                "y" => [
                    "beginAtZero" => true,
                    ]
                ]
            ]);


        return view('livewire.dashboard',[
            'page' => $page,
            'chartBar' => $chartBar,
            'chartPier' => $chartPier,
            'chartLine' => $chartLine
        ]);
    }

   
}
