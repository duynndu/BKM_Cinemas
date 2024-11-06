<?php

namespace App\Repositories\Admin\Actors\Interface;

use App\Repositories\Base\RepositoryInterface;

interface ActorInterface extends RepositoryInterface
{
    public function deleteMultiple(array $ids);
    public function createMany($data, $role);
}
