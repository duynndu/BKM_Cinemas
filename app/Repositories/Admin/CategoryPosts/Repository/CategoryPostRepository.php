<?php

namespace App\Repositories\Admin\CategoryPosts\Repository;

use App\Repositories\Admin\CategoryPosts\Interface\CategoryPostInterface;

class CategoryPostRepository implements CategoryPostInterface
{
    protected $category;
    public function __construct() {
    }
    public function getAllCategoryPost($request) {}
    public function createCategoryPost($data) {}
    public function getCategoryPostById($id) {}
    public function delete($id) {}
    public function getListCategoryPost() {}
    public function updateCategoryPost($data, $id) {}
}
