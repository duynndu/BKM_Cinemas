<?php

namespace App\Repositories\Admin\Blocks\Interface;

interface BlockInterface
{
    public function countBlock();

    public function getAllBLock($request);

    public function getAllPage();

    public function getBlockById($request);

    public function createBlock($data);

    public function getBlockByIdWithContents($id);

    public function updateBlock($data, $id);

    public function getAllBlockType();

    public function updateOrCreateBlockContent($blockId, $keyName, $content);

    public function deleteBlockContentById($id);

    public function delete($id);
}
