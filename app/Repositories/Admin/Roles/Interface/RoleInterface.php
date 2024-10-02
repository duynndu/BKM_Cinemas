<?php

namespace App\Repositories\Admin\Roles\Interface;

interface RoleInterface
{
    public function getAllRole($request);

    public function getRoleById($id);

    public function create($data);

    public function update($data, $id);

    public function delete($id);
}
