<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\RoleRequest;
use App\Models\Role;
use App\Services\Admin\Roles\RoleService;
use App\Traits\RemoveImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
    use RemoveImageTrait;
    protected $roleService;


    public function __construct(
        RoleService $roleService,
    )
    {
        $this->roleService = $roleService;
    }

    public function index(Request $request)
    {
        if ($request->query('page')) {
            $currentPage = $request->query('page', 1);
        }

        session([
            'page' => $currentPage ?? null,
        ]);

        $data['roles'] = $this->roleService->getAllRole($request);

        return view('admin.pages.members.roles.index', compact('data'));
    }

    public function create()
    {
        $data['modules'] = $this->roleService->getModules();

        return view('admin.pages.members.roles.create', compact('data'));
    }

    public function store(RoleRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->roleService->store($request);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.roles.index', [
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
        $data['role'] = $this->roleService->getRoleById($id);

        $data['modules'] = $this->roleService->getModules();

        return view('admin.pages.members.roles.edit', compact('data'));
    }

    public function update(RoleRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->roleService->update($request, $id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.roles.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật thành công"
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

            $this->roleService->delete($id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.roles.index', [
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

    public function removeAvatarImage(Request $request)
    {
        $role = $this->removeImage($request, new Role, 'image', 'roles');

        return response()->json(['image' => $role]);
    }
}
