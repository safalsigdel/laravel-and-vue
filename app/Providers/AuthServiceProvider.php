<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Schema;
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
    public function boot(Gate $gate)
    {
         Schema::defaultStringLength(191);
         $this->registerPolicies();
         Passport::routes();

         Gate::define('isSafal',function($user){
            return $user->email =='safalsigdel381@gmail.com';
         });

         Gate::define('isRam',function($user){
            return $user->email == 'ram@gmail.com';
         });

    }
}
