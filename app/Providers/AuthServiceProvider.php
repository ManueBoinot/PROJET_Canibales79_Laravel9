<?php

namespace App\Providers;
use App\Models\User;
use App\Models\Chien;
use Illuminate\Support\Facades\Gate;


use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot(): void
    {
        // $this->registerPolicies();


        Gate::define('delete', function (User $user, Chien $chien) {
            return $user->id === $chien->user_id;
        });

        Gate::define('create', function (User $user, Chien $chien) {
            return $user->id === $chien->user_id;
        });

        Gate::define('edit', function (User $user, Chien $chien) {
            return $user->id === $chien->user_id;
        });

        Gate::define('view', function (User $user, Chien $chien) {
            return $user->id === $chien->user_id;
        });

        Gate::define('update', function (User $user, Chien $chien) {
            return $user->id === $chien->user_id;
        });

    }
}
