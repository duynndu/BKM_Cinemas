<?php

namespace App\Http\Controllers\Admin\Blocks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blocks\BlockRequest;
use App\Services\Admin\Blocks\BlockService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class BlockController extends Controller
{
    protected $blockService;

    public function __construct(BlockService $blockService)
    {
        $this->blockService = $blockService;
    }

    public function index(Request $request)
    {
        $countBlock = $this->blockService->countBlock();

        $pages = $this->blockService->getAllPage();

        $blocks = $this->blockService->getAllBLock($request);

        $blockTypes = $this->blockService->getAllBlockType();

        return view('admin.pages.blocks.index', compact(
                'countBlock',
                'pages',
                'blocks',
                'blockTypes'
            )
        );
    }

    public function create()
    {
        $blockTypes = $this->blockService->getAllBlockType();

        return view('admin.pages.blocks.create', compact('blockTypes'));
    }

    public function store(BlockRequest $request)
    {
        try {
            DB::beginTransaction();

            $block = $this->blockService->store($request);

            DB::commit();

            // Khi thêm mới xong thì sẽ chuyển trực tiếp sang edit để viết code
            return redirect()->route('admin.blocks.edit', ['id' => $block]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm');
        }
    }

    public function edit($id)
    {
        $pages = $this->blockService->getAllPage();

        $data = $this->blockService->getBlockByIdWithContents($id);

        $block = $data['block'];

        $contents = $data['contents'];

        $blockTypes = $this->blockService->getAllBlockType();

        return view('admin.pages.blocks.edit', compact(
            'pages',
            'block',
            'contents',
            'blockTypes',
        ));
    }

    public function update(BlockRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->blockService->update($request, $id);

            DB::commit();

            return redirect()->route('admin.blocks.index')->with('status_succeed', 'Cập nhật khối trang thành công');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi cập nhật');
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $this->blockService->delete($id);

            DB::commit();

            return redirect()->route('admin.blocks.index')->with('status_succeed', 'Xóa khối trang thành công');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi xóa');
        }
    }
}
