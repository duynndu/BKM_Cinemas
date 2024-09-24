<?php

namespace App\Repositories\Admin\BlockTypes\Interface;

interface BlockTypeInterface
{
    public function countBlockType();

    public function getAllPage();

    public function getAllBlockType($request);

    public function createBlockType($data);

    public function getBlockTypeById($id);

    public function updateBlockType($data, $id);

    public function delete($id);
}
