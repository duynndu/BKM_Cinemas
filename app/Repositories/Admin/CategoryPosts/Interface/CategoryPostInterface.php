<?php

namespace App\Repositories\Admin\CategoryPosts\Interface;

use App\Repositories\Base\RepositoryInterface;

interface CategoryPostInterface extends RepositoryInterface
{
    public function getListCategoryPost();

    public function getListCategoryPostEdit($id);
    public function getAll();
    public function delete($id);
    public function checkPosition($positionValue);
}
