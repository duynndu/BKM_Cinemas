<?php

namespace App\Repositories\Admin\Menus\Interface;

interface MenuInterface
{
    public function getAllPage();

    public function getAllMenu();

    public function getAllPost();

    public function getAllCategoryPost();

    public function checkExistMenu($languageId, $key);

    public function createMenu($data);

    public function deleteAllStructureMenu();

    public function getLastChildId();

    public function delete();
}
