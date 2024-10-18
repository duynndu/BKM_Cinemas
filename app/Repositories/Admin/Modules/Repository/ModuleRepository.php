<?php

namespace App\Repositories\Admin\Modules\Repository;

use App\Models\Module;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Admin\Modules\Interface\ModuleInterface;

class ModuleRepository implements ModuleInterface
{
    CONST PAGINATION = 10;

    protected $module;

    protected $role;

    protected $permission;


    public function __construct(
        Role $role,
        Module $module,
        Permission $permission,
    )
    {
        $this->module = $module;
        $this->role = $role;
        $this->permission = $permission;
    }

    public function getAllModule()
    {
        return $this->module->with(['permissions'])
            ->orderBy('id', 'DESC')
            ->paginate(self::PAGINATION);
    }

    public function getAllPermissions()
    {
        return $this->permission->orderBy('id', 'DESC')->get();
    }

    public function create($data)
    {
        return $this->module->create($data);
    }

    public function createPermission($record, $data)
    {
        return $record->permissions()->create($data);
    }

    public function getModuleById($id)
    {
        return $this->module->find($id);
    }


    public function update($data, $id)
    {
        $module = $this->getModuleById($id);

        $module->update($data);

        return $module;
    }

    public function getPermissionsByModuleId($moduleId)
    {
        // Lấy tất cả permission_id cho module tương ứng
        $module = $this->getModuleById($moduleId);

        if (!$module) {
            return redirect()->route('admin.modules.index')->with('status_failed', 'Không tìm thấy module');
        }

        // Lấy permission_id cho module tương ứng
        return $this->permission->where('module_id', $moduleId)->pluck('id')->toArray();
    }


    public function deletePermissionsByModuleId($module, $permissionsIds)
    {
        $permissionsToDelete = $module->permissions()->whereIn('id', $permissionsIds)->pluck('id')->toArray();

        if (!empty($permissionsToDelete)) {
            return $module->permissions()->whereIn('id', $permissionsToDelete)->delete();
        }
    }

    public function delete($id)
    {
        $module = $this->getModuleById($id);

        if (!$module) {
            return redirect()->route('admin.modules.index')->with('status_failed', 'Không tìm thấy module');
        }

        $module->delete($id);

        $this->deletePermissionsByModuleId($module, $module->permissions()->pluck('id')->toArray());

        return true;
    }
}
