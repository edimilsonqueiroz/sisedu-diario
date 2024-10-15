<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Permission;
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
        Gate::define('professorCoordenador', function(User $user){
            return $user->isProfessor && $user->isCoordenador;
        });

        Gate::define('professor', function(){

        });

        Gate::define('secretaria', function(){

        });

        Gate::define('coordenador', function(){

        });

        Gate::define('administrador', function(User $user){
            return $user->isAdmin;
        });
    }
}
