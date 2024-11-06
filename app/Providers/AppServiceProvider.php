<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('admin-secretaria', function(User $user){
            return $user->isAdmin || $user->isSecretaria;
        });

        Gate::define('professor', function(User $user){
            return $user->isProfessor;
        });

        Gate::define('secretaria', function(User $user){
            return $user->isSecretaria;
        });

        Gate::define('coordenador', function(User $user){
            return $user->isCoordenador;
        });

        Gate::define('administrador', function(User $user){
            return $user->isAdmin;
        });

        Gate::define('aluno', function(User $user){
            return $user->isAluno;
        });
    }
}
