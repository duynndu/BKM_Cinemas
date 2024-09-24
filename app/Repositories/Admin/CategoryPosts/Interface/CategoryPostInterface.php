<?php

namespace App\Repositories\Admin\CategoryPosts\Interface;

interface CategoryPostInterface
{
    public function getAllCategoryPost($request);

    public function createCategoryPost($data);

    public function getCategoryPostById($id);

    public function delete($id);

    public function getListCategoryPost();

    public function getListCategoryPostEdit($id);

    public function updateCategoryPost($data, $id);
}

