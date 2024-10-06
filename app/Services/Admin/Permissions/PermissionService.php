<?php

namespace App\Services\Admin\Permissions;

use App\Repositories\Admin\Permissions\Repository\PermissionRepository;

class PermissionService
{
    protected $permissionRepository;

    public function __construct(
        PermissionRepository $permissionRepository
    )
    {
        $this->permissionRepository = $permissionRepository;
    }
    public function getAllPermissions()
    {
        return $this->permissionRepository->getAllPermissions();
    }

    public function getAllModules()
    {
        return $this->permissionRepository->getAllModules();
    }

    public function getPermissionById($id)
    {
        return $this->permissionRepository->getPermissionById($id);
    }
    public function store($request)
    {
        $data = [
            'module_id' => $request->module_id ?? null,
            'name' => $request->name,
            'value' => $request->value,
        ];

        $this->permissionRepository->create($data);

        return true;
    }

    public function update($request, $id)
    {
        $permission = $this->permissionRepository->getPermissionById($id);

        if (!$permission) {
            return redirect()->route('admin.permissions.index')->with('status_failed', 'Không tìm thấy chức năng');
        }

        $data = [
            'module_id' => $request->module_id ?? null,
            'name' => $request->name,
            'value' => $request->value,
        ];

        $this->permissionRepository->update($data, $id);

        return true;
    }

    public function delete($id)
    {
        return $this->permissionRepository->delete($id);
    }
    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) > 0) {
            foreach ($request->selectedIds as $id) {
                $this->permissionRepository->delete($id);
            }
            return true;
        }
    }
}
