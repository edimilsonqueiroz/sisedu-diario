<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginController;
use App\Livewire\Dashboard;
use App\Livewire\UserController;
use App\Livewire\EscolaController;
use App\Livewire\TurmaController;
use App\Livewire\DisciplinaController;
use App\Livewire\MatriculaController;
use App\Livewire\MovimentoTurmas;
use App\Livewire\Profile;
use App\Livewire\ResetPassword;
use App\Livewire\TurmaAluno;
use App\Livewire\TurmaProfessor;
use App\Livewire\TurmaRegistro;
use App\Livewire\TurmaConteudo;
use App\Livewire\TurmaDisciplina;
use App\Livewire\TurmaFrequencia;
use App\Livewire\TurmaNota;
use App\Livewire\ValidateCode;
use App\Http\Controllers\PdfController;


Route::get('/', LoginController::class)->name('login');
Route::get('/reset-password',ResetPassword::class)->name('reset-password');
Route::get('/{cpf}/validate-code',ValidateCode::class)->name('validate-code');
Route::get('/gerar-pdf',[PdfController::class, 'index'])->name('gerar-pdf');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');
    Route::get('/users', UserController::class)->name('users');
    Route::get('/schools', EscolaController::class)->name('escolas');
    Route::get('/classes', TurmaController::class)->name('turmas');
    
    Route::get('/class-moviment', MovimentoTurmas::class)->name('movimento-turmas');
    Route::get('/class-moviment/class/{turma}', TurmaRegistro::class)->name('turma-registro');
    Route::get('/class-moviment/class/{turma}/content', TurmaConteudo::class)->name('turma-content');
    Route::get('/class-moviment/class/{turma}/frequency', TurmaFrequencia::class)->name('turma-frequency');
    Route::get('class-moviment/class/{turma}/student', TurmaAluno::class)->name('turma-student');
    Route::get('class-moviment/class/{turma}/teacher', TurmaProfessor::class)->name('turma-teacher');
    Route::get('/class-moviment/class/{turma}/notes', TurmaNota::class)->name('turma-note');
    Route::get('/class-moviment/class/{turma}/disciplines', TurmaDisciplina::class)->name('turma-disciplines');
    Route::get('/registration', MatriculaController::class)->name('matriculas');
});
