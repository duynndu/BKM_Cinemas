<?php

namespace App\Services\Admin\Notifications\Services;

use App\Repositories\Admin\Notifications\Interfaces\NotificationInterface;
use App\Services\Admin\Notifications\Interfaces\NotificationServiceInterface;
use App\Services\Base\BaseService;

class NotificationService extends BaseService implements NotificationServiceInterface
{
    public function getRepository()
    {
        return NotificationInterface::class;
    }

    public function getByType($type)
    {
        return $this->repository->getByType($type);
    }

}
