<?php

namespace App\Repositories\Contracts;

interface GetCityDataInterface
{
    public function getCityData( float $lat, float $lon): object;
}
