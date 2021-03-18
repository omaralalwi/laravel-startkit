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
        Gate::before(function ($user, $ability) {
            return $user->hasRole('super admin') ? true : null;
        });
		
		// for blog system
		/*
		Gate::define(GateTypes::MANAGE_BLOG_ADMIN, static function (?Model $user) {
		   // Implement your logic here, for example:
		   return $user && $user->email === 'your-admin-user@your-site.com';
		   // Or something like `$user->is_admin === true`
	   }); */
   
    }
}
