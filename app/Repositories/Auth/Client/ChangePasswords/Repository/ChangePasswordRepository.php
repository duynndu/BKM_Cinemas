<?php

namespace App\Repositories\Auth\Client\ChangePasswords\Repository;

use App\Models\User;
use App\Repositories\Auth\Client\ChangePasswords\Interface\ChangePasswordInterface;
use App\Repositories\Base\BaseRepository;

class ChangePasswordRepository extends BaseRepository implements ChangePasswordInterface
{
    public function getModel()
    {
        return User::class;
    }
}