<?php

namespace App\Providers;

use App\Repositories\Contracts\GetCityDataInterface;
use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;
use App\Repositories\LoginTemperatureRepository;
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
        $this->app->bind(GetCityDataInterface::class, OpenWeatherMapRepository::class);
        $this->app->bind(LoginTemperatureRepositoryInterface::class, LoginTemperatureRepository::class);
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
