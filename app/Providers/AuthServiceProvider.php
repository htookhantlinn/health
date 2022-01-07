<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\User;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('delete-blog', function (User $user, Blog $blog) {
            return $user->id === $blog->user_id;
        });

        Gate::define('update-blog', function (User $user, Blog $blog) {
            return $user->id === $blog->user_id;
        });

        Gate::define('is-Admin', function (User $user) {
            return $user->role_id == 1;
        });
        Gate::define('is-Manager', function (User $user) {
            return $user->role_id == 2;
        });
        Gate::define('is-User', function (User $user) {
            return $user->role_id == 3;
        });
        //
    }
}
