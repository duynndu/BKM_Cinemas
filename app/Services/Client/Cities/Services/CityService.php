<?php

namespace App\Services\Client\Cities\Services;

use App\Repositories\Client\Cities\Interface\CityInterface;
use App\Repositories\Client\Cities\Repository\CityRepository;
use App\Services\Base\BaseService;
use App\Services\Client\Cities\Interfaces\CityServiceInterface;

class CityService extends BaseService implements CityServiceInterface
{
    public function getRepository()
    {
        return CityInterface::class;
    }
}
