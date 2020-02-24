<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Place;
use App\Models\Promotion;
use App\Policies\UserPolicy;
use App\Policies\PlacePolicy;
use App\Policies\PromotionPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        User::class => UserPolicy::class,
        Place::class => PlacePolicy::class,
        Promotion::class => PromotionPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // Implicitly grant "Super Admin" role all permissions
        // This works in the app by using gate-related functions like auth()->user->can() and @can()
        Gate::before(function (User $user, $ability) {
            return $user->hasRole('Super Admin') ? true : null;
        });
    }
}
