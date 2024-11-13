<?php

namespace App\Repositories\Admin\Modules\Interfaces;

use App\Repositories\Base\RepositoryInterface;

interface ModuleInterface extends RepositoryInterface
{
    public function createPermission($record, $data);
    public function filter($request);
    public function deletePermissionsByModuleId($module, $permissionsIds);

}
