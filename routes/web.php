<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\LoginController;
use App\Livewire\Dashboard;

Route::get('/', LoginController::class);
Route::get('/dashboard', Dashboard::class);
