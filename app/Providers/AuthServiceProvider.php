<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use App\Http\Controllers\VacanteController;
use App\Models\User;
use App\Models\Vacante;
use App\Policies\UserPolicy;
use App\Policies\VacantePolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        Vacante::class => VacantePolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('view-users', [UserPolicy::class, 'viewAny']);
        Gate::define('view-permisos', [UserPolicy::class, 'permisos_View']);
        Gate::define('view-roles', [UserPolicy::class, 'roles_View']);
        Gate::define('create-permisos', [UserPolicy::class, 'permisos_create']);
    }
}
