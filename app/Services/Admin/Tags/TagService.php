<?php

namespace App\Services\Admin\Tags;

use App\Repositories\Admin\Tags\Repository\TagRepository;

class TagService
{
    protected $tagRepository;
    public function __construct(
        TagRepository   $tagRepository
    ) {
        $this->tagRepository = $tagRepository;
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
