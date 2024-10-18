<?php

namespace App\Services\Admin\Roles;
use App\Repositories\Admin\Roles\Repository\RoleRepository;
use App\Traits\RemoveImageTrait;
use App\Traits\StorageImageTrait;

class RoleService
{
    use StorageImageTrait, RemoveImageTrait;
    protected $roleRepository;

    public function __construct(
        RoleRepository $roleRepository
    )
    {
        $this->roleRepository = $roleRepository;
    }

    public function getAllRole($request)
    {
        return $this->roleRepository->getAllRole($request);
    }

    public function getModules()
    {
        return $this->roleRepository->getModules();
    }

    public function getRoleById($id)
    {
        return $this->roleRepository->getRoleById($id);
    }


    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
        ];

        // Xử lý upload ảnh nếu có
        $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/roles');

        if ($imageUploadData) {
            $data['image'] = $imageUploadData['path'];
        }

        $role = $this->roleRepository->create($data);

        if (is_array($request->permissions) && count($request->permissions) > 0) {
            $role->permissions()->attach($request->permissions);
        }

        return true;
    }

    public function update($request, $id)
    {
        $role = $this->roleRepository->getRoleById($id);

        if (!$role) {
            return redirect()->route('admin.roles.index')->with('status_failed', 'Không tìm thấy vai trò');
        }

        $data = [
            'name' => $request->name,
            'type' => $request->type,
            'description' => $request->description,
        ];

        if ($request->hasFile('image')) {
            $this->existImage($role, 'image', 'roles');

            $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/roles');

            $data['image'] = $imageUploadData['path'];
        }

        $this->roleRepository->update($data, $id);

        // Cập nhật permissions
        if (is_array($request->permissions)) {
            // Lấy danh sách permissions hiện tại
            $currentPermissions = $role->permissions->pluck('id')->toArray();

            // Lấy danh sách permissions mới
            $newPermissions = $request->permissions;

            // Tìm các permissions cần xóa
            $permissionsToDetach = array_diff($currentPermissions, $newPermissions);

            if (!empty($permissionsToDetach)) {
                // Xóa các bản ghi vừa tìm được = detach
                $role->permissions()->detach($permissionsToDetach);
            }

            // Tìm các permissions cần thêm mới
            $permissionsToAttach = array_diff($newPermissions, $currentPermissions);

            if (!empty($permissionsToAttach)) {
                // Thêm mới các bản ghi đã được chọn mới
                $role->permissions()->attach($permissionsToAttach);
            }
        } else {
            $role->permissions()->detach();
        }

        return true;
    }

    public function delete($id)
    {
        return $this->roleRepository->delete($id);
    }
}
