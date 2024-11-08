<?php

namespace App\Services\Admin\BlockTypes\Services;

use App\Repositories\Admin\BlockTypes\Interface\BlockTypeInterface;
use App\Services\Admin\BlockTypes\Interfaces\BlockTypeServiceInterface;
use App\Services\Base\BaseService;

class BlockTypeService extends BaseService implements BlockTypeServiceInterface
{
    public function getRepository()
    {
        return BlockTypeInterface::class;
    }

    public function countBlockType()
    {
        return $this->repository->countBlockType();
    }

    public function getAllActive()
    {
        return $this->repository->getAllActive();
    }

}
