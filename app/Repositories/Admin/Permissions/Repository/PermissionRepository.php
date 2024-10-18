<?php

namespace App\Repositories\Admin\Permissions\Repository;

use App\Models\Module;
use App\Models\Permission;
use App\Repositories\Admin\Permissions\Interface\PermissionInterface;

class PermissionRepository implements PermissionInterface
{
    CONST PAGINATION = 10;

    protected $permission;

    protected $module;


    public function __construct(
        Permission $permission,
        Module $module,
    )
    {
        $this->permission = $permission;
        $this->module = $module;
    }

    public function getAllPermissions()
    {
        return $this->permission->select('id', 'name', 'value')
            ->orderBy('id', 'DESC')
            ->paginate(self::PAGINATION);
    }

    public function getAllModules()
    {
        return $this->module->select('id', 'name')->orderBy('id', 'DESC')->get();
    }

    public function create($data)
    {
        return $this->permission->create($data);
    }
    public function getPermissionById($permissionId)
    {
        return $this->permission->find($permissionId);
    }


    public function update($data, $id)
    {
        $permission = $this->permission->find($id);

        $permission->update($data);

        return $permission;
    }

    public function delete($id)
    {
        $permission = $this->getPermissionById($id);

        if (!$permission) {
            return redirect()->route('admin.permissions.index')->with('status_failed', 'Không tìm thấy chức năng');
        }

        $permission->delete($id);

        return true;
    }
}
