<?php

namespace App\Http\Controllers\Admin\Members;

use App\Http\Controllers\Controller;
use App\Http\Requests\Roles\RoleRequest;
use App\Services\Admin\Languages\LanguageService;
use App\Services\Admin\Roles\RoleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class RoleController extends Controller
{
    protected $roleService;

    protected $languageService;

    public function __construct(
        RoleService $roleService,
        LanguageService $languageService
    )
    {
        $this->roleService = $roleService;
        $this->languageService = $languageService;
    }

    public function index(Request $request)
    {
        $data['roles'] = $this->roleService->getAllRole($request);

        return view('admin.pages.members.roles.index', compact('data'));
    }

    public function create()
    {
        $data['languages'] = $this->languageService->languages();

        return view('admin.pages.members.roles.create', compact('data'));
    }

    public function store(RoleRequest $request)
    {
        dd($request->all());
        try {
            DB::beginTransaction();

            $this->roleService->create($request);

            DB::commit();

            return redirect()->route('admin.roles.index')->with('status_succeed', 'Thêm mới thành công');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm');
        }
    }
}
