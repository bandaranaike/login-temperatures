<?php

namespace App\Repositories;

use App\Models\LoginTemperature;
use App\Repositories\Contracts\GetCityDataInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class OpenWeatherMapRepository implements GetCityDataInterface
{

    /**
     * @var LoginTemperature
     */
    private $model;

    public function __construct(LoginTemperature $model)
    {
        $this->model = $model;
    }

    /**
     * @param float $lat
     * @param float $lon
     * @return object
     */
    public function getCityData(float $lat, float $lon): object
    {
        $logintemperature = config("logintemperature");

        $response = Http::get(config("logintemperature.api_url"), [
            "lat" => $lat,
            "lon" => $lon,
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
        return $this->model->whereUserId(Auth::id())->orderByDesc('created_at')->get();
    }

    /**
     * @param string $city
     * @param float $celsius
     * @param float $fahrenheit
     * @return object
     */
    public function saveLoginTempData(string $city, float $celsius, float $fahrenheit): object
    {
        $new_model = new $this->model;

        $new_model->city = $city;
        $new_model->celsius = $celsius;
        $new_model->fahrenheit = $fahrenheit;
        $new_model->user_id = Auth::id();

        $new_model->save();

        return $new_model;
    }
}


/**
 * https://api.openweathermap.org/data/2.5/onecall?lat=33.44&lon=-94.04&exclude=hourly,daily&appid={API key}
 * $response = Http::get('http://example.com/users', [
 * 'name' => 'Taylor',
 * 'page' => 1,
 * ]);
 */
