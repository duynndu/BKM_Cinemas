<?php

namespace App\Repositories\Client\Deposits\Repository;

use App\Models\User;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Client\Deposits\Interface\DepositInterface;

class DepositRepository extends BaseRepository implements DepositInterface
{
    public function getModel()
    {
        return User::class;
    }
}