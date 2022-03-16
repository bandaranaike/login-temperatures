<?php

namespace App\Repositories\Contracts;

interface LoginTemperatureRepositoryInterface
{
    public function getCityDataByCoordinates(string $city_name): object;

    public function saveLoginTempData(int $user_id, string $city, float $celsius, float $fahrenheit): object;

    public function getSavedLoginTempDataForLoggedUser();
}
