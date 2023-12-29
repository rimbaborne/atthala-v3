<?php

namespace App\Providers;

use App\Repositories\Interface\DivisiRepoInterface;
use App\Repositories\DivisiRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(DivisiRepoInterface::class, DivisiRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
