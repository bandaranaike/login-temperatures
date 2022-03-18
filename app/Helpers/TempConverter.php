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
        return $this->kelvin - 273.15;
    }

    /**
     * @return float
     */
    public function kelvinToFahrenheit(): float
    {
        return ($this->kelvinToCelsius() * (9 / 5)) + 32;
    }
}
