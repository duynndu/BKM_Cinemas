<?php

namespace App\Repositories\Admin\Modules\Interface;

interface ModuleInterface
{
    public function getAllModule();

    public function create($data);

    public function createPermission($record, $data);

    public function getModuleById($id);

    public function update($data, $id);

    public function getPermissionsByModuleId($moduleId);

    public function deletePermissionsByModuleId($module, $permissionsIds);

    public function delete($id);
}
