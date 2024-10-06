<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Users\UserRequest;
use App\Models\User;
use App\Services\Admin\Roles\RoleService;
use App\Services\Admin\Users\UserService;
use App\Traits\RemoveImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class UserController extends Controller
{
    use RemoveImageTrait;
    protected $userService;

    protected $roleService;


    public function __construct(
        UserService $userService,
        RoleService $roleService,
    )
    {
        $this->userService = $userService;
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

        $data['users'] = $this->userService->getAllUser();

        return view('admin.pages.members.users.index', compact('data'));
    }

    public function create()
    {
        $data['roles'] = $this->userService->getAllRole();

        return view('admin.pages.members.users.create', compact('data'));
    }

    public function store(UserRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->store($request);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.users.index', [
                'page' => $currentPage,
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Thêm mới thành công"
            ]);
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm');
        }
    }

    public function edit($id)
    {
        $data['user'] = $this->userService->getUserById($id);

        if (!$data['user']) {
            return redirect()->route('admin.users.index')->with('status_failed', 'Không tìm thấy người dùng');
        }

        $data['roles'] = $this->userService->getAllRole();

        return view('admin.pages.members.users.edit', compact('data'));
    }

    public function update(UserRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->userService->update($request, $id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.users.index', [
                'page' => $currentPage
            ]);

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật thành công"
            ]);
        } catch(\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi cập nhật');
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $this->userService->delete($id);

            DB::commit();

            $currentPage = session('page', 1);

            $redirectUrl = route('admin.users.index', [
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
        $system = $this->removeImage($request, new User, 'image', 'users');

        return response()->json(['image' => $system]);
    }

    public function changeStatus(Request $request)
    {
        $user = $this->userService->changeStatus($request);

        return response()->json(['status' => $user->status]);
    }
}
