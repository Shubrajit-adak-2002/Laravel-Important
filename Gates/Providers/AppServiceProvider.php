<?php

namespace App\Providers;

use App\Models\user;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

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
        // This gathe is user an admin or a author
        Gate::define('isAdmin',function(user $user){
            return $user->role === 'admin';
        });

        // This gate is checking user can only check his profile not any other's
        Gate::define('profile',function(user $user, int $profileId){
            return $user->id === $profileId;
        });
    }
}
