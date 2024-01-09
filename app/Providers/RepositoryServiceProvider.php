<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(\App\Repositories\Interface\DivisiRepoInterface::class, \App\Repositories\DivisiRepository::class);
        $this->app->bind(\App\Repositories\Interface\UserRepoInterface::class, \App\Repositories\UserRepository::class);
        $this->app->bind(\App\Repositories\Interface\RoleRepoInterface::class, \App\Repositories\RoleRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
