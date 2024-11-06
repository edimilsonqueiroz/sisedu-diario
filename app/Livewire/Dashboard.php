<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;

class Dashboard extends Component
{
    public string $page = "Dashboard";

    public function lineChart()
    {
        $chartLine = Chartjs::build()
        ->name('lineChartTest')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['1º ANO', '2º ANO', '3º ANO','4º ANO'])
        ->datasets([
            [
                "label" => "TOTAL DE EVASÃO POR TURMA",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                "data" => [5, 3, 2, 6],
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

        return $chartLine;
    }

    public function barChart()
    {
        $chartBar = Chartjs::build()
         ->name('barChartTest')
         ->type('bar')
         ->labels(['1º ANO','2º ANO','3º ANO','4º ANO'])
         ->datasets([
             [
                 "label" => "REPROVAÇÃO POR TURMA",
                 'backgroundColor' => ['#527aba','#527aba','#527aba','#527aba'],
                 'data' => [15, 14, 20, 19]
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

         return $chartBar;
    }

    public function pieChart()
    {
        $chartPier = app()->chartjs
        ->name('pieChartTest')
        ->type('pie')
        ->labels(['1º ANO','2º ANO','3º ANO','4º ANO'])
        ->datasets([
            [
                'label'=>'MATRICULAS POR TURMA',
                'backgroundColor' => ['#2F4F4F','#4B0082','#800000','#008B8B'],
                'hoverBackgroundColor' => ['#FF6384', '#36A2EB'],
                'data' => [15, 10, 18, 69]
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

        return $chartPier;
    }
    
    #[Title('SISEDU-DIÁRIO - Dashboard')] 
    public function render()
    {
        $page = 'Dashboard';
        
         
        


        return view('livewire.dashboard',[
            'page' => $page,
            'chartBar' => $this->barChart(),
            'chartPier' => $this->pieChart(),
            'chartLine' => $this->lineChart()
        ]);
    }

   
}
