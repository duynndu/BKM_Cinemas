<?php

namespace App\Services\Admin\BlockTypes;

use App\Repositories\Admin\BlockTypes\Repository\BlockTypeRepository;
use Stichoza\GoogleTranslate\GoogleTranslate;

class BlockTypeService
{
    protected $blockTypeRepository;

    public function __construct(
        BlockTypeRepository $blockTypeRepository
    )
    {
        $this->blockTypeRepository = $blockTypeRepository;
    }

    public function countBlockType()
    {
        return $this->blockTypeRepository->countBlockType();
    }

    public function getAllPage()
    {
        return $this->blockTypeRepository->getAllPage();
    }

    public function getAllBlockType($request)
    {
        return $this->blockTypeRepository->getAllBlockType($request);
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $blockType = $this->blockTypeRepository->createBlockType($data);

        return $blockType;
    }

    public function getBlockTypeById($id)
    {
        return $this->blockTypeRepository->getBlockTypeById($id);
    }


    public function update($request, $id)
    {
        $blockType = $this->blockTypeRepository->getBlockTypeById($id);

        if (!$blockType) {
            return redirect()->route('admin.blockTypes.index')->with('status_failed', 'Không tìm thấy loại khối');
        }

        $data = [
            'name' => $request->name,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $blockType = $this->blockTypeRepository->updateBlockType($data, $id);

        return $blockType;
    }

    public function delete($id)
    {
        return $this->blockTypeRepository->delete($id);
    }
}
