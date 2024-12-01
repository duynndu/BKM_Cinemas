<?php

namespace App\Repositories\Client\Rewards\Repositories;

use App\Models\Reward;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Client\Rewards\Interfaces\RewardInterface;

class RewardRepository extends BaseRepository implements RewardInterface
{
    public function getModel()
    {
        return Reward::class;
    }
}