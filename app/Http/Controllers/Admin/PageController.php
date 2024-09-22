<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Pages\PageRequest;
use App\Services\Admin\Pages\PageService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PageController extends Controller
{
    protected $pageService;

    public function __construct(
        PageService $pageService
    )
    {
        $this->pageService = $pageService;
    }

    public function index(Request $request)
    {
        if ($request->query('page')) {
            $currentPage = $request->query('page', 1);
        }

        session([
            'page' => $currentPage ?? null,
        ]);

        $countPage = $this->pageService->countPage();

        $pages = $this->pageService->getAllPage($request);

        return view('admin.pages.pages.index', compact('pages', 'countPage'));
    }

    public function create()
    {
        return view('admin.pages.pages.create');
    }

    public function store(PageRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->pageService->store($request);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.pages.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Thêm trang thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm mới');
        }
    }


    public function edit($id)
    {
        $page = $this->pageService->getPageById($id);

        if (!$page) {
            return redirect()->route('admin.pages.index')->with('status_failed', 'Không tìm thấy trang');
        }

        return view('admin.pages.pages.edit', compact('page'));
    }

    public function update(PageRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->pageService->update($request, $id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.pages.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật trang thành công"
            ]);
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

            $this->pageService->delete($id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.pages.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Xóa trang thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi xóa');
        }
    }
}
