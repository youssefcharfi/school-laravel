<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
          // 'App\Actuality' => 'App\Policies\ActualityPolicy',
          'App\User' => 'App\Policies\UserPolicy',
          'App\Filiere' => 'App\Policies\FilierePolicy',
          'App\Absence' => 'App\Policies\AbsencePolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::before(function($user, $ability){
            if($user->isAdmin && in_array($ability, ["view","delete","create","update"])){
                return true;
            }
        });
        //
    }
}
