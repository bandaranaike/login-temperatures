<?php

namespace App\Helpers;

class TempConverter
{

    private $kelvin;

    /**
     * @param $kelvin
     */
    public function __construct($kelvin)
    {
        $this->kelvin = $kelvin;
    }

    /**
     * @return float
     */
    public function kelvinToCelsius(): float
    {
        return round($this->kelvin - 273.15, 2);
    }

    /**
     * @return float
     */
    public function kelvinToFahrenheit(): float
    {
        return round(($this->kelvinToCelsius() * (9 / 5)) + 32, 2);
    }
}
