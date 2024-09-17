<?php

namespace App\Services\Admin\CategoryPosts;

use App\Repositories\Admin\CategoryPosts\Repository\CategoryPostRepository;

class CategoryPostService
{
    protected $categoryPostRepository;
    public function __construct(
        CategoryPostRepository $categoryPostRepository
    ) {
        $this->categoryPostRepository = $categoryPostRepository;
    }
    public function getAllCategoryPost($request) {}
    public function store($request) {}
    public function getCategoryPostById($id) {}
    public function update($request, $id) {}
    public function getListCategoryPost() {}
    public function getListCategoryPostEdit($id) {}
    public function delete($id) {}
    public function changeOrder($request) {}
}
