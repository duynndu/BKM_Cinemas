<?php

namespace App\Repositories\Admin\Permissions\Repositories;

use App\Models\Permission;
use App\Repositories\Admin\Permissions\Interfaces\PermissionInterface;
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
