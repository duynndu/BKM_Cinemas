<?php

namespace App\Services\Admin\Roles\Services;

use App\Repositories\Admin\Roles\Interface\RoleInterface;
use App\Services\Admin\Roles\Interfaces\RoleServiceInterface;
use App\Services\Base\BaseService;
use App\Traits\RemoveImageTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class RoleService extends BaseService implements RoleServiceInterface
{
    use StorageImageTrait, RemoveImageTrait;

    public function getRepository()
    {
        return RoleInterface::class;
    }

    public function create(&$data)
    {
        if (!empty($data['role']['image'])) {
            $uploadData = $this->uploadFile($data['image']['role'], 'public/roles');
            $data['role']['image'] = $uploadData['path'];
        }
        $role = $this->repository->create($data['role']);

        if (is_array($data['permissions']) && count($data['permissions']) > 0) {
            $role->permissions()->attach($data['permissions']);
        }

        return true;
    }

    public function update(&$data, $id)
    {
        $role = $this->repository->find($id);

        if (!$role) {
            return redirect()->route('admin.roles.index')->with('status_failed', 'Không tìm thấy vai trò');
        }

        if (!empty($data['role']['image'])) {
            if ($role->image) {
                $this->deleteAvatar($role->image, 'roles');
            }
            $uploadData = $this->uploadFile($data['role']['image'], 'public/roles');
            $data['role']['image'] = $uploadData['path'];
        }

        $this->repository->update($id, $data['role']);

        if (is_array($data['permissions'])) {
            $currentPermissions = $role->permissions->pluck('id')->toArray();

            $newPermissions = $data['permissions'];

            $permissionsToDetach = array_diff($currentPermissions, $newPermissions);

            if (!empty($permissionsToDetach)) {
                $role->permissions()->detach($permissionsToDetach);
            }

            $permissionsToAttach = array_diff($newPermissions, $currentPermissions);

            if (!empty($permissionsToAttach)) {
                $role->permissions()->attach($permissionsToAttach);
            }
        } else {
            $role->permissions()->detach();
        }

        return true;
    }

    private function uploadFile($data, $folderName)
    {
        $path = $data->store($folderName);

        return [
            'name' => $data->getClientOriginalName(),
            'path' => Storage::url($path),
        ];
    }

    private function deleteAvatar($avatar, $folderName)
    {
        $path = "public/$folderName/" . basename($avatar);
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }
}
