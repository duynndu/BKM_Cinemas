<?php

namespace App\Repositories\Admin\Permissions\Repository;

use App\Models\Permission;
use App\Repositories\Admin\Permissions\Interface\PermissionInterface;
use App\Repositories\Base\BaseRepository;

class PermissionRepository extends BaseRepository implements PermissionInterface
{
    public function getModel()
    {
        return Permission::class;
    }
    public function getAll()
    {
        return $this->model->select('id', 'name', 'value')
            ->orderBy('id', 'DESC')
            ->paginate(self::PAGINATION);
    }
}
