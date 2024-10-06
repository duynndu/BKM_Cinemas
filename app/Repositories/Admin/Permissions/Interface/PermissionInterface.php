<?php

namespace App\Repositories\Admin\Permissions\Interface;

interface PermissionInterface
{
    public function getAllPermissions();

    public function getAllModules();

    public function create($data);

    public function getPermissionById($permissionId);

    public function update($data, $id);

    public function delete($id);
}
