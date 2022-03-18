<?php

namespace App\Listeners;

use App\Models\UserCity;
use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;
use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class SaveLoginTemperature
{
    public $repository;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(LoginTemperatureRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the event.
     *
     * @param Login $user
     * @return void
     */
    public function handle(Login $event)
    {

        $user = $event->user;

        $cities = $this->getUserCities($user);


    }

    private function getUserCities($user)
    {
        return $user->load('cities')->cities;
    }

    private function getTemps()
    {
        $this->repository->getCityData();
    }
}
