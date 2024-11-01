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
     
    ];

     /**
      * Register any authentication / authorization services.
      *
      * @return void
      */

    public function boot()
    {

        $this->registerPolicies();
        /* define a admin user role */

        Gate::define('delete', function ($user) {

            return in_array($user->getRoleName(), ['super admin', 'admin']);
        });

        Gate::define('edit', function($user) {
            return in_array($user->getRoleName(),['super admin','admin','editor']);  
        });
        

        /* define a manager user role */

        Gate::define('change.status', function($user) {

            return $user->role == 'manager';

        });
  
        
  
        /* define a user role */

        Gate::define('isUser', function($user) {

            return $user->role == 'user';

        });

      }
}
