<?php

namespace App\Repositories\Admin\BlockTypes\Repository;

use App\Models\BlockType;
use App\Models\Language;
use App\Models\Page;
use App\Repositories\Admin\BlockTypes\Interface\BlockTypeInterface;

class BlockTypeRepository implements BlockTypeInterface
{
    const PAGINATION = 6;

    protected $blockType;

    protected $page;

    public function __construct(
        Page        $page,
        BlockType   $blockType,
    )
    {
        $this->blockType = $blockType;
        $this->page = $page;
    }

    public function countBlockType()
    {
        return $this->blockType->count();
    }

    public function getAllPage()
    {
        $pages = $this->page->get();
        return $pages;
    }

    public function getAllBlockType($request)
    {
        $blockTypes = $this->blockType->orderBy('order');

        if($request->name) {
            $blockTypes = $blockTypes->where('name', 'like', '%' . $request->name . '%');
        }

        $blockTypes = $blockTypes->paginate(self::PAGINATION);

        return $blockTypes;
    }

    public function createBlockType($data)
    {
        return $this->blockType->create($data);
    }


    public function getBlockTypeById($id)
    {
        $blockType = $this->blockType->find($id);

        return $blockType;
    }

    public function updateBlockType($data, $id)
    {
        $blockType = $this->blockType->find($id);

        $blockType->update($data);

        return $blockType;
    }


    public function delete($id)
    {
        $blockType = $this->blockType->find($id);

        if(!$blockType) {
            return redirect()->route('admin.blockTypes.index')->with([
                'status_failed' => 'Không tìm thấy danh mục'
            ]);
        }

        $blockType->delete();

        return $blockType;
    }

}
