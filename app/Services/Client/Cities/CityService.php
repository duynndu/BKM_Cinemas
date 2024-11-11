<?php

namespace App\Services\Client\Cities;

use App\Repositories\Client\Cities\Repository\CityRepository;

class CityService
{
    protected $cityRepository;
    public function __construct(
        CityRepository $cityRepository
    )
    {
        $this->cityRepository = $cityRepository;
    }

    public function getAllCity()
    {
        return $this->cityRepository->getAllCity();
    }
}
