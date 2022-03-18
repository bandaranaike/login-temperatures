<?php

namespace Tests\Feature;

use App\Models\LoginTemperature;
use App\Repositories\OpenWeatherMapRepository;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OpenWhetherRepositoryTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_getCityDataByCoordinates()
    {
        $rep = new OpenWeatherMapRepository(new LoginTemperature());
        $k = $rep->getCityDataByCoordinates("colombo");
        $this->assertIsObject($k);
        $this->assertObjectHasAttribute("current", $k);
        $this->assertObjectHasAttribute("current", $k);
    }

    public function test_getSavedLoginTempDataForLoggedUser(){
        $r = new OpenWeatherMapRepository(new LoginTemperature());
    }


    public function test_saveLoginTempData(){

    }
}
