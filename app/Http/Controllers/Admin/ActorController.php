<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Actors\ActorRequest;
use App\Services\Admin\Actors\ActorService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ActorController extends Controller
{
    protected $actorService;

    public function __construct(
        ActorService $actorService
    ) {
        $this->actorService = $actorService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->actorService->getAll();
        return view('admin.pages.actors.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.actors.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActorRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->actorService->store($request->actor);

            DB::commit();

            return redirect()->route('admin.actors.index')->with('status_succeed', "Thêm diễn viên thành công");
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with(['status_failed' => 'Đã xảy ra lỗi, vui lòng thử lại sau.']);

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = $this->actorService->find($id);
        if (!$data) {
            return redirect()->route('admin.actors.index')->with(['status_failed' => 'Không tìm thấy!']);
        }
        return view('admin.pages.actors.edit', compact('data'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            DB::beginTransaction();
            if (!$this->actorService->update($request->actor, $id)) {
                return redirect()->route('admin.actors.index')->with(['status_failed' => 'Không tìm thấy!']);
            }

            DB::commit();
            return redirect()->route('admin.actors.index')->with('status_succeed', "Sửa diễn viên thành công");
        } catch (\Throwable $e) {
            DB::rollBack();
            Log::error("Error updating actors: {$e->getMessage()} at line {$e->getLine()}");
            return back()->with(['status_failed' => 'Đã xảy ra lỗi, vui lòng thử lại sau.']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            if (!$this->actorService->delete($id)) {
                return redirect()->route('admin.actors.index')->with(['status_failed' => 'Không tìm thấy!']);
            }
            DB::commit();
            return redirect()->route('admin.actors.index')->with([
                'status_succeed' => 'Xóa diễn viên thành công'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with([
                'status_failed' => 'Đã xảy ra lỗi khi xóa'
            ]);
        }
    }

    public function deleteItemMultipleChecked(Request $request)
    {
        try {
            DB::beginTransaction();
            if (empty($request->selectedIds)) {
                return response()->json(['message' => 'Vui lòng chọn ít nhất 1 bản ghi'], 400);
            }
            $this->actorService->deleteMultipleChecked($request);

            DB::commit();
            return response()->json(['message' => 'Xóa thành công!'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra!',
            ], 500);
        }
    }
}
