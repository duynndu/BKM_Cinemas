<?php

namespace App\Repositories\Client\Cities\Repository;

use App\Models\City;
use App\Repositories\Client\Cities\Interface\CityInterface;

class CityRepository implements CityInterface
{
    protected $city;

    public function __construct(
        City $city
    )
    {
        $this->city = $city;
    }

    public function getAllCity()
    {
        return $this->city->select('id', 'name')->get();
    }
}
