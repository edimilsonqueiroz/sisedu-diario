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
            
                foreach($user->permissions as $permission){
                    return $permission->name === 'PROFESSOR' && $permission->name === 'COORDENADOR';
                }
            

        });

        Gate::define('professor', function(){

        });

        Gate::define('secretaria', function(){

        });

        Gate::define('coordenador', function(){

        });

        Gate::define('admin', function(){

        });
    }
}
