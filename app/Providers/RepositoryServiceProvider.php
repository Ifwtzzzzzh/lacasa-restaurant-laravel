<?php

namespace App\Providers;

use App\Interfaces\RestaurantRepositoryInterface;
use App\Repositories\RestaurantRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(RestaurantRepositoryInterface::class, RestaurantRepository::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
