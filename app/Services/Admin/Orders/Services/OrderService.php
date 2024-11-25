<?php

namespace App\Services\Admin\Orders\Services;

use App\Repositories\Admin\Orders\Interfaces\OrderInterface;
use App\Services\Admin\Orders\Interfaces\OrderServiceInterface;
use App\Services\Base\BaseService;

class OrderService extends BaseService implements OrderServiceInterface
{
    public function getRepository()
    {
        return OrderInterface::class;
    }

}
