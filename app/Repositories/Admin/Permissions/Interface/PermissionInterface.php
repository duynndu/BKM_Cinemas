<?php

namespace App\Repositories\Admin\Permissions\Interface;

use App\Repositories\Base\RepositoryInterface;

interface PermissionInterface extends RepositoryInterface
{
    public function filter($request);
}
