<?php

namespace App\Repositories\Auth\Client\Registers\Repository;

use App\Models\User;
use App\Repositories\Auth\Client\Registers\Interface\RegisterInterface;
use App\Repositories\Base\BaseRepository;

class RegisterRepository extends BaseRepository implements RegisterInterface
{
    public function getModel()
    {
        return User::class;
    }
}