<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Modules\ModuleRequest;
use App\Services\Admin\Modules\ModuleServices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ModuleController extends Controller
{
    protected $moduleServices;

    public function __construct(
        ModuleServices $moduleServices,
    )
    {
        $this->moduleServices = $moduleServices;
    }

    public function index(Request $request)
    {
        if ($request->query('page')) {
            $currentPage = $request->query('page', 1);
        }

        session([
            'page' => $currentPage ?? null,
        ]);

        $data['modules'] = $this->moduleServices->getAllModule();

        return view('admin.pages.members.modules.index', compact('data'));
    }

    public function create()
    {
        $data['permissions'] = $this->moduleServices->getAllPermissions();

        return view('admin.pages.members.modules.create', compact('data'));
    }

    public function store(ModuleRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->moduleServices->store($request);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.modules.index', [
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
        $data['module'] = $this->moduleServices->getModuleById($id);

        $data['permissions'] = $this->moduleServices->getAllPermissions();

        return view('admin.pages.members.modules.edit', compact('data'));
    }

    public function update(ModuleRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->moduleServices->update($request, $id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.modules.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật module thành công."
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi cập nhật.');
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $this->moduleServices->delete($id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.modules.index', [
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
        $this->moduleServices->deleteMultipleChecked($request);

        return response()->json(['message' => 'Xóa thành công!']);
    }
}
