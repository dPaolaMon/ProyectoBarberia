<?php

namespace App\Providers;

//use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
		$this->registerPolicies();
		
        //Gates
        Gate::define('acceder-master-user', function ($user) {
		return true; // todos
		});
		Gate::define('acceder-citas', function ($user) {
		return true; // todos
		});
		
        Gate::define('acceder-empleados', function ($user) {
		return $user->esAdmin();  
		//return $this->role === 'admin'; solo admin
		});
		Gate::define('acceder-servicios', function ($user) {
		return $user->esAdmin() || $user->esEmpleado(); // solo admin
		});
		Gate::define('acceder-clientes', function ($user) {
		return $user->esAdmin(); // solo admin
		});
    }
}
