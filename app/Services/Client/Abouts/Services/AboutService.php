<?php

namespace App\Services\Client\Abouts\Services;

use App\Repositories\Client\Systems\Interfaces\SystemInterface;
use App\Services\Client\Abouts\Interfaces\AboutServiceInterface;

class AboutService implements AboutServiceInterface
{
    private $systemRepository;
    public function __construct(
        SystemInterface $systemRepository
    ){
        $this->systemRepository = $systemRepository;
    }
    public function getSytemBySlug($slug)
    {
        return $this->systemRepository->getSytemBySlug($slug);
    }

    public function getSystemByType($type)
    {
        return $this->systemRepository->getSystemByType($type);
    }

}
