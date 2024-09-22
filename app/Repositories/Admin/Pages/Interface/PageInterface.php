<?php

namespace App\Repositories\Admin\Pages\Interface;

interface PageInterface
{
    public function countPage();

    public function getAllPage($request);

    public function createPage($data);

    public function updatePage($data, $id);

    public function getPageById($id);

    public function delete($id);
}
