<?php

namespace App\Repositories\Admin\Tags\Interface;

interface TagInterface
{
    public function createPost($data);

    public function updatePost($data, $id);

    public function getPostById($id);

    public function createRelatedPhotoPost($record, $data);

    public function getImageRelatedPhotoById($id);

    public function delete($id);
}
