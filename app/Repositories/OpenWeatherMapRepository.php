<?php

namespace App\Repositories;

use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;
use Illuminate\Support\Facades\Http;

class OpenWeatherMapRepository implements LoginTemperatureRepositoryInterface
{

    /**
     * @param string $city_name
     * @return object
     */
    public function getCityDataByCoordinates(string $city_name): object
    {
        $logintemperature = config("logintemperature");
        $city = $logintemperature["cities"][$city_name];

        $response = Http::get(config("logintemperature.api_url"), [
            "lat" => $city["lat"],
            "lon" => $city["lon"],
            "appid" => $logintemperature["api_key"],
            "exclude" => "hourly,daily,minutely"
        ]);

        return json_decode($response->body());
    }


    /**
     * @return mixed
     */
    public function getSavedLoginTempDataForLoggedUser()
    {
        // TODO: Implement getSavedLoginTempDataForLoggedUser() method.
    }

    /**
     * @param int $user_id
     * @param string $city
     * @param float $celsius
     * @param float $fahrenheit
     * @return object
     */
    public function saveLoginTempData(int $user_id, string $city, float $celsius, float $fahrenheit): object
    {
        // TODO: Implement saveLoginTempData() method.
    }
}


/**
 * https://api.openweathermap.org/data/2.5/onecall?lat=33.44&lon=-94.04&exclude=hourly,daily&appid={API key}
 * $response = Http::get('http://example.com/users', [
 * 'name' => 'Taylor',
 * 'page' => 1,
 * ]);
 */
