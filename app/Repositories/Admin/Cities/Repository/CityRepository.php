<?php

namespace App\Repositories\Admin\Cities\Repository;

use App\Models\City;
use App\Repositories\Admin\Cities\Interface\CityInterface;




class CityRepository implements CityInterface
{
    protected $city;

    public function __construct(City $city)
    {
        $this->city = $city;
    }

    public function getAllCities()
    {
        return $this->city->all();
    }

    public function findCityById($id)
    {
        return $this->city->findOrFail($id);
    }

    public function create($data)
    {
        return $this->city->create($data);
    }

    public function update($id, $data)
    {
        $city = $this->findCityById($id);
        $city->update($data);
        return $city;
    }

    public function delete($id)
    {
        $city = $this->findCityById($id);
        return $city->delete();
    }
}
