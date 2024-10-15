<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginController;
use App\Livewire\Dashboard;
use App\Livewire\UserController;
use App\Livewire\EscolaController;
use App\Livewire\TurmaController;
use App\Livewire\DisciplinaController;

Route::get('/', LoginController::class)->name('login');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');
    Route::get('/users', UserController::class)->name('users');
    Route::get('/schools', EscolaController::class)->name('escolas');
    Route::get('/classes', TurmaController::class)->name('turmas');
    Route::get('/disciplines', DisciplinaController::class)->name('disciplinas');
});
