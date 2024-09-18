<?php

namespace App\Repositories\Admin\Tags\Repository;

use App\Repositories\Admin\Tags\Interface\TagInterface;

class TagRepository implements TagInterface
{
    public function __construct() {}
    public function createPost($data) {}
    public function updatePost($data, $id) {}
    public function getPostById($id) {}
    public function createRelatedPhotoPost($record, $data) {}
    public function getImageRelatedPhotoById($id) {}
    public function delete($id) {}
}
