<?php

namespace App\Repositories\Admin\Blocks\Repository;

use App\Models\Block;
use App\Models\BlockContent;
use App\Models\BlockType;
use App\Models\Page;
use App\Repositories\Admin\Blocks\Interface\BlockInterface;

class BlockRepository implements BlockInterface
{
    const PAGINATION = 6;

    protected $page;

    protected $block;


    protected $blockType;

    protected $blockContent;

    public function __construct(
        Page         $page,
        Block        $block,
        BlockType    $blockType,
        BlockContent $blockContent
    ) {
        $this->block = $block;
        $this->blockType = $blockType;
        $this->page = $page;
        $this->blockContent = $blockContent;
    }

    public function countBlock()
    {
        $count = $this->block->count();

        return $count;
    }

    public function getAllPage()
    {
        $pages = $this->page->get();

        return $pages;
    }

    public function getAllBLock($request)
    {
        $blocks = $this->block->orderBy('order');

        if ($request->name) {
            $blocks = $blocks->where('name', 'like', '%' . $request->name . '%');
        }

        $blocks = $blocks->paginate(self::PAGINATION);

        return $blocks;
    }

    public function getAllBlockType()
    {
        $blockTypes = $this->blockType->get();

        return $blockTypes;
    }

    public function createBlock($data)
    {
        return $this->block->create($data);
    }

    public function updateBlock($data, $id)
    {
        $block = $this->block->find($id);

        $block->update($data);

        return $block;
    }

    public function getBlockByIdWithContents($id)
    {
        $block = $this->block->with('blockContents')->find($id);

        $contents = $block->blockContents->pluck('value', 'key_name')->toArray();

        return compact('block', 'contents');
    }

    public function getBlockById($id)
    {
        $block = $this->block->with('blockContents')->find($id);

        return $block;
    }

    public function deleteBlockContentById($id)
    {
        $blockContent = $this->blockContent->where('block_id', $id)->delete();

        return $blockContent;
    }

    public function updateOrCreateBlockContent($blockId, $keyName, $content)
    {
        return $this->blockContent->updateOrCreate(
            [
                'block_id' => $blockId,
                'key_name' => $keyName
            ],
            [
                'value' => $content
            ]
        );
    }

    public function delete($id)
    {
        $block = $this->block->find($id);

        $block->delete();

        $block->blockContents()->delete();

        return $block;
    }
}
