<?php

namespace App\Services\Client\Rewards\Services;

use App\Repositories\Client\Rewards\Interfaces\RewardInterface;
use App\Services\Base\BaseService;
use App\Services\Client\Rewards\Interfaces\RewardServiceInterface;

class RewardService extends BaseService implements RewardServiceInterface
{
    public function getRepository()
    {
        return RewardInterface::class;
    }
}