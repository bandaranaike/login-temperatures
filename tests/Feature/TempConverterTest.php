<?php

namespace Tests\Feature;

use App\Helpers\TempConverter;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TempConverterTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testKelvinTo()
    {
        $tc = new TempConverter(273.15);
        $this->assertEquals(0, $tc->kelvinToCelsius());
        $this->assertEquals(32, $tc->kelvinToFahrenheit());
    }
}
