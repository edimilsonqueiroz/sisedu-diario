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
use App\Livewire\TurmaRegistro;
use App\Livewire\TurmaConteudo;
use App\Livewire\TurmaFrequencia;
use App\Livewire\ValidateCode;


Route::get('/', LoginController::class)->name('login');
Route::get('/reset-password',ResetPassword::class)->name('reset-password');
Route::get('/{cpf}/validate-code',ValidateCode::class)->name('validate-code');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');
    Route::get('/users', UserController::class)->name('users');
    Route::get('/schools', EscolaController::class)->name('escolas');
    Route::get('/classes', TurmaController::class)->name('turmas');
    Route::get('/disciplines', DisciplinaController::class)->name('disciplinas');
    Route::get('/class-moviment', MovimentoTurmas::class)->name('movimento-turmas');
    Route::get('/class-moviment/class/{id}', TurmaRegistro::class)->name('turma-registro');
    Route::get('/class-moviment/class/{id}/content', TurmaConteudo::class)->name('turma-conteudo');
    Route::get('/class-moviment/class/{id}/frequency', TurmaFrequencia::class)->name('turma-frequencia');
    Route::get('/registration', MatriculaController::class)->name('matriculas');
});
