<?php

namespace App\Repositories\Admin\Tags\Interface;

interface TagInterface
{
    public function listTags();
    public function getAlltags($request);
    public function store($data);
    public function tagsSelected($id);
    public function getTagById($id);
    public function updateTag($data, $id);
    public function delete($id);
}
