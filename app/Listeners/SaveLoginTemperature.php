<?php

namespace App\Listeners;

use App\Helpers\TempConverter;
use App\Models\LoginTemperature;
use App\Repositories\Contracts\GetCityDataInterface;
use Illuminate\Auth\Events\Login;


class SaveLoginTemperature
{
    public $repository;

    /**
     * Create the event listener.
     * Need to loosely coupled the city data provider since it can be changed.
     *
     * @return void
     */
    public function __construct(GetCityDataInterface $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Handle the event.
     *
     * @param Login $event
     * @return void
     */
    public function handle(Login $event)
    {

        // Logged user
        $user = $event->user;

        // Users cities
        $cities = $this->getUserCities($user);

        // Inserting data
        $temp_insertable_data = $this->getTempsInsertableData($cities);

        // Saving temperature data
        $user->loginTemperatures()->saveMany($temp_insertable_data);

    }

    /**
     * Getting user cities
     * @param $user
     * @return mixed
     */
    private function getUserCities($user)
    {
        return $user->load('cities')->cities;
    }

    /**
     * Preparing the insertable data in to the table
     * @param $cities
     * @return object
     */
    private function getTempsInsertableData($cities): object
    {
        return $cities->map(function ($city) {
            // Getting data from the API
            $temp_data = $this->repository->getCityData($city->lat, $city->lon);

            $fahrenheit = $celsius = null;

            if ($temp_data->current && $temp_data->current->temp) {

                // Temperature converters
                $temp_converter = new TempConverter($temp_data->current->temp);
                $fahrenheit = $temp_converter->kelvinToFahrenheit();
                $celsius = $temp_converter->kelvinToCelsius();

            }
            return new LoginTemperature(["celsius" => $celsius, "fahrenheit" => $fahrenheit, "city_id" => $city->id]);
        });
    }

}
