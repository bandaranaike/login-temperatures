<?php

namespace App\Repositories\Contracts;

interface LoginTemperatureRepositoryInterface
{
    public function getCityData( float $lat, float $lon): object;

    public function saveLoginTempData(string $city, float $celsius, float $fahrenheit): object;

    public function getSavedLoginTempDataForLoggedUser();
}
