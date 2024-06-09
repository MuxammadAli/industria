<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
         'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        Passport::personalAccessTokensExpireIn(now()->addDays(30));

        Passport::tokensCan([
            'admin' => 'Add/Edit/Delete Login User',
            'moderator' => 'Moderator',
            'operator' => 'Operator',
            'archeologist' => 'Archeologist',
            'journalist' => 'Journalist',
            'cadaster' => 'Cadaster',
            'client' => 'Login User',
        ]);

        Passport::setDefaultScope([
            'client'
        ]);
    }
}