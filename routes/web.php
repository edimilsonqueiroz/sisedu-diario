<?php

use App\Http\Controllers\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Livewire\LoginController;
use App\Livewire\Dashboard;
use App\Livewire\UserController;

Route::get('/', LoginController::class)->name('login');

Route::prefix('dashboard')->middleware('auth')->group(function(){
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::get('/logout',[LogoutController::class, 'logout'])->name('logout');
    Route::get('/users', UserController::class)->name('users');
});
