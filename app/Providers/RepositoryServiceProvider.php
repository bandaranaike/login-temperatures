<?php

namespace App\Providers;

use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;
use App\Repositories\OpenWeatherMapRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(LoginTemperatureRepositoryInterface::class, OpenWeatherMapRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
