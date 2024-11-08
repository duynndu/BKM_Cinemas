<?php

namespace App\Repositories\Admin\Modules\Interface;

use App\Repositories\Base\RepositoryInterface;

interface ModuleInterface extends RepositoryInterface
{
    public function createPermission($record, $data);
    public function deletePermissionsByModuleId($module, $permissionsIds);

}
