<?php

namespace App\Repositories\Admin\Rewards\Interfaces;

use App\Repositories\Base\RepositoryInterface;

interface RewardInterface extends RepositoryInterface
{
    public function deleteMultiple(array $ids);
    public function filter($request);
}