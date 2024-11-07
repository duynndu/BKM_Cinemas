<?php

namespace App\Services\Admin\Modules\Services;

use App\Repositories\Admin\Modules\Interface\ModuleInterface;
use App\Services\Admin\Modules\Interfaces\ModuleServiceInterface;
use App\Services\Base\BaseService;

class ModuleServices extends BaseService implements ModuleServiceInterface
{
    public function getRepository()
    {
        return ModuleInterface::class;
    }

    public function create(&$data)
    {
        $module = $this->repository->create($data['module']);

        foreach ($data['permissions'] as $permission) {
            $this->repository->createPermission($module, [
                'module_id' => $module->id,
                'name' => $permission
            ]);
        }

        return true;
    }

    public function update(&$data, $id)
    {
        $module = $this->repository->find($id);

        if (!$module) {
            return redirect()->route('admin.modules.index')->with('status_failed', 'Không tìm thấy module');
        }

        $selectedPermissions = $data['permissions']; // Các permissions được chọn từ form

        $this->repository->update($id, $data['module']);

        $existingPermissions = $module->permissions->pluck('id')->toArray();

        $permissionsToDelete = array_diff($existingPermissions, $selectedPermissions);
        if (!empty($permissionsToDelete)) {
            $this->repository->deletePermissionsByModuleId($module, $permissionsToDelete);
        }

        $permissionsToAdd = array_diff($selectedPermissions, $existingPermissions);

        if (!empty($permissionsToAdd)) {
            foreach ($permissionsToAdd as $permission) {
                $this->repository->createPermission($module, [
                    'module_id' => $module->id,
                    'name' => $permission,
                ]);
            }
        }

        return true;
    }

    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) > 0) {
            foreach ($request->selectedIds as $id) {
                $this->repository->delete($id);
            }
            return true;
        }
    }
}
