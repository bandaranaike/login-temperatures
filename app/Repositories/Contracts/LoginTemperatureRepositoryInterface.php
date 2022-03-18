<?php

namespace App\Repositories\Contracts;

interface LoginTemperatureRepositoryInterface
{
    public function getSavedLoginTempDataForLoggedUser();

    public function getUserCities();
}
