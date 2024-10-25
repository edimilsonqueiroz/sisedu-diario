<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginController;
use App\Livewire\Dashboard;
use App\Livewire\UserController;
use App\Livewire\EscolaController;
use App\Livewire\TurmaController;
use App\Livewire\DisciplinaController;
use App\Livewire\DiarioController;
use App\Livewire\TurmaAluno;
use App\Livewire\TurmaProfessor;
use App\Livewire\TurmaDisciplina;
use App\Livewire\MatriculaController;


Route::get('/', LoginController::class)->name('login');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');
    Route::get('/users', UserController::class)->name('users');
    Route::get('/schools', EscolaController::class)->name('escolas');
    Route::get('/classes', TurmaController::class)->name('turmas');
    Route::get('/disciplines', DisciplinaController::class)->name('disciplinas');
    Route::get('/classe-teacher', TurmaProfessor::class)->name('turma-professor');
    Route::get('/classe-student',TurmaAluno::class)->name('turma-aluno');
    Route::get('/classe-discipline', TurmaDisciplina::class)->name('turma-disciplina');
    Route::get('/diaries',DiarioController::class)->name('diarios');
    Route::get('/registration', MatriculaController::class)->name('matriculas');
});
