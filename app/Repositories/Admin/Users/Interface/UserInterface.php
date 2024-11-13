<?php

namespace App\Repositories\Admin\Users\Interface;

use App\Repositories\Base\RepositoryInterface;

interface UserInterface extends RepositoryInterface
{
    public function filter($request);
}
