<?php

namespace App\Repositories\Admin\Roles\Repository;

use App\Models\Module;
use App\Models\Role;
use App\Repositories\Admin\Roles\Interface\RoleInterface;
use App\Traits\RemoveImageTrait;

class RoleRepository implements RoleInterface
{
    use RemoveImageTrait;

    CONST PAGINATION = 12;

    protected $role;
    protected $module;

    public function __construct(
        Role       $role,
        Module     $module
    )
    {
        $this->role = $role;
        $this->module = $module;
    }

    public function getAllRole($request)
    {
        $roles = $this->role->with('permissions')
            ->paginate(self::PAGINATION);

        return $roles;
    }

    public function getModules()
    {
        return $this->module->select('id', 'name')->with('permissions')->orderBy('id', 'ASC')
            ->get();
    }

    public function getRoleById($id)
    {
        return $this->role->find($id);
    }

    public function create($data)
    {
        return $this->role->create($data);
    }

    public function update($data, $id)
    {
        $role = $this->role->find($id);
        $role->update($data);
        return $role;
    }

    public function delete($id)
    {
        $role = $this->getRoleById($id);

        if (!$role) {
            return redirect()->route('admin.roles.index')->with('status_failed', 'Không tìm thấy vai trò');
        }

        $this->existImage($role, 'image', 'roles');

        $role->delete($id);

        if(!empty($role->permissions)) {
            $role->permissions()->detach();
        }

        return true;
    }
}
