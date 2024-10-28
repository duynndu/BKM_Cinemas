<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Permissions\PermissionRequest;
use App\Services\Admin\Permissions\PermissionService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PermissionController extends Controller
{
    protected $permissionService;

    public function __construct(
        PermissionService $permissionService,
    )
    {
        $this->permissionService = $permissionService;
    }

    public function index(Request $request)
    {
        if ($request->query('page')) {
            $currentPage = $request->query('page', 1);
        }

        session([
            'page' => $currentPage ?? null,
        ]);

        $data['permissions'] = $this->permissionService->getAllPermissions();

        return view('admin.pages.members.permissions.index', compact('data'));
    }

    public function create()
    {
        $data['modules'] = $this->permissionService->getAllModules();

        return view('admin.pages.members.permissions.create', compact('data'));
    }

    public function store(PermissionRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->permissionService->store($request);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.permissions.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Thêm mới thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm');
        }
    }

    public function edit($id)
    {
        $data['permission'] = $this->permissionService->getPermissionById($id);

        $data['modules'] = $this->permissionService->getAllModules();

        return view('admin.pages.members.permissions.edit', compact('data'));
    }

    public function update(PermissionRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->permissionService->update($request, $id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.permissions.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi cập nhật');
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $this->permissionService->delete($id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.permissions.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Xóa thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi xóa');
        }
    }
    public function deleteItemMultipleChecked(Request $request)
    {
        if (empty($request->selectedIds)) {
            return response()->json(['message' => 'Vui lòng chọn ít nhất 1 bản ghi'], 400); // Trả về mã lỗi 400
        }
        $this->permissionService->deleteMultipleChecked($request);

        return response()->json(['message' => 'Xóa thành công!']);
    }
}
