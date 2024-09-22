<?php

namespace App\Repositories\Admin\Systems\Interface;

interface SystemInterface
{
    public function getAllSystemByType0SideBar();

    public function getAllSystemByType0($request);

    public function getAllSystemBySystemId($request);

    public function createSystem($data);

    public function updateSystem($data, $id);

    public function getSystemById($id);

    public function delete($id);
}
