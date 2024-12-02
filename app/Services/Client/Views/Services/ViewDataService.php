<?php

namespace App\Services\Client\Views\Services;

use App\Repositories\Client\Views\Interfaces\ViewInterface;
use App\Services\Client\Views\Interfaces\ViewServiceInterface;

class ViewDataService implements ViewServiceInterface
{

    protected $repository;
    public function __construct(ViewInterface $repository){
        $this->repository = $repository;
    }
    public function getNotifications() {

        return $this->repository->getNotifications();
    }

}
