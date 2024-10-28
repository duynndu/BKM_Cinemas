<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Menus\StoreMenuRequest;
use App\Services\Admin\Menus\MenuService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MenuController extends Controller
{
    protected $menuService;
    public function __construct(
        MenuService $menuService
    )
    {
        $this->menuService = $menuService;
    }

    public function index()
    {
        $pages = $this->menuService->getAllPage();

        $menus = $this->menuService->getAllMenu();

        $categoryPosts = $this->menuService->getAllCategoryPost();

        $posts = $this->menuService->getAllPost();

        $lastChildId = $this->menuService->getLastChildId();

        return view('admin.pages.menus.index', compact(
            'pages',
            'menus',
            'lastChildId',
            'posts',
            'categoryPosts',
        ));
    }

    public function store(StoreMenuRequest $request)
    {
        try {
            $this->menuService->store($request);

            return response()->json([
                'status' => true
            ]);
        } catch(\Exception $e) {
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return response()->json([
                'status' => false,
                'message' => $e
            ]);
        }
    }

    public function delete()
    {
        try {
            DB::beginTransaction();

            $menus = $this->menuService->delete();

            DB::commit();

            if ($menus) {
                return redirect()->route('admin.menus.index')->with('status_succeed', 'Xóa menu thành công');
            } else {
                return back()->with('status_failed', 'Không thể xóa vì menu đang trống!');
            }
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi');
        }
    }

}
