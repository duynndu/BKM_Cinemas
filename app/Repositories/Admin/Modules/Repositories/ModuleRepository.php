<?php

namespace App\Repositories\Admin\Modules\Repositories;

use App\Models\Module;
use App\Models\Permission;
use App\Models\Role;
use App\Repositories\Admin\Modules\Interfaces\ModuleInterface;
use App\Repositories\Base\BaseRepository;

class ModuleRepository extends BaseRepository implements ModuleInterface
{

    public function getModel()
    {
        return Module::class;
    }

    public function getAll()
    {
        return $this->model->with(['permissions'])
            ->orderBy('id', 'DESC')
            ->paginate(self::PAGINATION);
    }

    public function createPermission($record, $data)
    {
        return $record->permissions()->create($data);
    }

    public function find($id)
    {
        $result = $this->model->with('permissions')->find($id);

        if ($result) {
            return $result;
        }

        return false;
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
        $module = $this->find($id);

        if (!$module) {
            return redirect()->route('admin.modules.index')->with('status_failed', 'Không tìm thấy module');
        }

        $module->delete($id);

        $this->deletePermissionsByModuleId($module, $module->permissions()->pluck('id')->toArray());

        return true;
    }
}
