<?php

namespace App\Repositories;

use App\Models\LoginTemperature;
use App\Repositories\Contracts\LoginTemperatureRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class LoginTemperatureRepository implements LoginTemperatureRepositoryInterface
{
    const HOTTEST_FIST_ORDERING_COLUMN = "celsius";

    /**
     * Need to separate all records in to two cities
     * @param $records
     * @return mixed
     */
    private function separateCities($records)
    {
        return $records->mapToGroups(function ($item, $key) {
            return ["city_" . $item->city_id => $item];
        });

    }

    /**
     * Get the saved login temperatures
     * @return mixed
     */
    public function getSavedLoginTempDataForLoggedUser($order_by = null)
    {
        $builder = LoginTemperature::whereUserId(Auth::id())
            ->with('city:id,name')
            ->select('created_at', 'city_id', 'fahrenheit', 'celsius');

        if ($order_by && $order_by == self::HOTTEST_FIST_ORDERING_COLUMN) {
            $builder->orderByDesc(self::HOTTEST_FIST_ORDERING_COLUMN);
        }

        return $this->separateCities($builder->get());
    }

    /**
     * Get users cities
     * @return mixed
     */
    public function getUserCities()
    {
        return Auth::user()->cities;
    }

}
