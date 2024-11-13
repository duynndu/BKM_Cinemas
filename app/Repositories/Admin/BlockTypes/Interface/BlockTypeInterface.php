<?php

namespace App\Repositories\Admin\BlockTypes\Interface;

use App\Repositories\Base\RepositoryInterface;

interface BlockTypeInterface extends RepositoryInterface
{
    public function countBlockType();
    public function getAllActive();
    public function filter($request);
}
