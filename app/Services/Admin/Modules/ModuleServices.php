<?php

namespace App\Services\Admin\Modules;

use App\Repositories\Admin\Modules\Repository\ModuleRepository;
use App\Repositories\Admin\Permissions\Repository\PermissionRepository;

class ModuleServices
{
    protected $moduleRepository;
    protected $permissionRepository;

    public function __construct(
        ModuleRepository $moduleRepository,
        PermissionRepository $permissionRepository
    )
    {
        $this->moduleRepository = $moduleRepository;
        $this->permissionRepository = $permissionRepository;
    }

    public function getAllModule()
    {
        return $this->moduleRepository->getAllModule();
    }

    public function getAllPermissions()
    {
        return $this->moduleRepository->getAllPermissions();
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        $module = $this->moduleRepository->create($data);

        foreach ($request->permissions as $permission) {
            $this->moduleRepository->createPermission($module, [
                'module_id' => $module->id,
                'name' => $permission
            ]);
        }

        return true;
    }

    public function getModuleById($id)
    {
        return $this->moduleRepository->getModuleById($id);
    }

    public function update($request, $id)
    {
        $module = $this->moduleRepository->getModuleById($id);

        if (!$module) {
            return redirect()->route('admin.modules.index')->with('status_failed', 'Không tìm thấy module');
        }

        $selectedPermissions = $request->input('permissions', []); // Các permissions được chọn từ form

        $data = [
            'name' => $request->name,
            'description' => $request->description,
        ];

        // Cập nhật module
        $this->moduleRepository->update($data, $id);

        // Lấy các permissions hiện tại trong database
        $existingPermissions = $this->moduleRepository->getPermissionsByModuleId($module->id);

        // Tìm các permissions bị bỏ chọn (cần xóa)
        $permissionsToDelete = array_diff($existingPermissions, $selectedPermissions);
        if (!empty($permissionsToDelete)) {
            // Xóa các permissions không còn được chọn
            $this->moduleRepository->deletePermissionsByModuleId($module, $permissionsToDelete);
        }

        // Tìm các permissions mới cần thêm vào
        $permissionsToAdd = array_diff($selectedPermissions, $existingPermissions);

        if (!empty($permissionsToAdd)) {
            foreach ($permissionsToAdd as $permission) {
                $this->moduleRepository->createPermission($module, [
                    'module_id' => $module->id,
                    'name' => $permission,
                ]);
            }
        }

        return true;
    }


    public function delete($id)
    {
        return $this->moduleRepository->delete($id);
    }

    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) > 0) {
            foreach ($request->selectedIds as $id) {
                $this->moduleRepository->delete($id);
            }
            return true;
        }
    }
}
