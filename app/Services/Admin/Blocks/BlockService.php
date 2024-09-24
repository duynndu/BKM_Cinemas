<?php

namespace App\Services\admin\Blocks;

use App\Repositories\Admin\Blocks\Repository\BlockRepository;
use Stichoza\GoogleTranslate\GoogleTranslate;

class BlockService
{
    protected $blockRepository;

    public function __construct(
        BlockRepository $blockRepository
    )
    {
        $this->blockRepository = $blockRepository;
    }

    public function countBlock()
    {
        return $this->blockRepository->countBlock();
    }

    public function getAllPage()
    {
        return $this->blockRepository->getAllPage();
    }

    public function getAllBLock($request)
    {
        return $this->blockRepository->getAllBLock($request);
    }

    public function getAllBlockType()
    {
        return $this->blockRepository->getAllBlockType();
    }

    public function store($request)
    {
        $dataBlock = [
            'name' => $request->name,
            'slug' => $request->slug,
            'page_id' => $request->page_id,
            'block_type_id' => $request->block_type_id,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $block = $this->blockRepository->createBlock($dataBlock);

        return $block->id;
    }

    public function getBlockByIdWithContents($id)
    {
        return $this->blockRepository->getBlockByIdWithContents($id);
    }


    public function update($request, $id)
    {
        $block = $this->blockRepository->getBlockById($id);

        if(!$block) {
            return back()->with('status_failed', 'Không tìm thấy khối trang');
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'block_type_id' => $request->block_type_id,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $this->blockRepository->updateBlock($data, $id);

        $this->blockRepository->deleteBlockContentById($id);

        $contentTypes = [];

        if (!empty($request->html)) {
            $contentTypes['html'] = $request->html;
        }

        if (!empty($request->css)) {
            $contentTypes['css'] = $request->css;
        }

        if (!empty($request->js)) {
            $contentTypes['js'] = $request->js;
        }

        foreach ($contentTypes as $keyName => $content) {
            $this->blockRepository->updateOrCreateBlockContent($id, $keyName, $content);
        }

        return true;
    }

    public function delete($id)
    {
        return $this->blockRepository->delete($id);
    }
}
