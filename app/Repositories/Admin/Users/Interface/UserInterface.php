<?php

namespace App\Repositories\Admin\Users\Interface;
interface UserInterface
{
    public function getAllUser();

    public function getAllRole();

    public function create($request);

    public function getUserById($id);

    public function update($data, $id);

    public function delete($id);
}
