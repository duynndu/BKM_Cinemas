<?php

namespace App\Services\Admin\Posts;

use App\Repositories\Admin\Posts\Repository\PostRepository;

class PostService
{
    protected $postRepository;
    public function __construct(
        PostRepository $postRepository
    ){
        $this->postRepository = $postRepository;
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
