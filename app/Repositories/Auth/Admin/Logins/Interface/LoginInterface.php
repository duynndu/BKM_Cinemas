<?php

namespace App\Repositories\Auth\Admin\Logins\Interface;

use App\Repositories\Base\RepositoryInterface;

interface LoginInterface extends RepositoryInterface
{
    public function checkEmailGuard($email);
}
