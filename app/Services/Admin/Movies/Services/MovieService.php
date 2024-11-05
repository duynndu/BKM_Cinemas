<?php

namespace App\Services\Admin\Movies\Services;

use App\Repositories\Admin\Movies\Interface\MovieInterface;
use App\Services\Admin\Movies\Interfaces\MovieServiceInterface;
use App\Services\Base\BaseService;

class MovieService extends BaseService implements MovieServiceInterface
{
    public function getRepository()
    {
        return MovieInterface::class;
    }
}
