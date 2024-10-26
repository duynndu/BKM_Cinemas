<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AreaRequests;
use App\Services\Admin\Areas\AreaService;
use App\Models\City; // Import model City
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AreaController extends Controller
{
    protected $areaService;

    public function __construct(AreaService $areaService)
    {
        $this->areaService = $areaService;
    }

    public function index()
    {
        $areas = $this->areaService->getAllArea();
        return view('admin.pages.area.index', compact('areas'));
    }

    public function create()
    {
        
        $cities = City::all(); 
        return view('admin.pages.area.create', compact('cities'));
    }

    public function store(AreaRequests $request)
{
    DB::beginTransaction();
    try {
        $this->areaService->create($request); 
        DB::commit();
        return redirect()->route('admin.areas.index')->with('success', 'Khu vực đã được tạo thành công.');
    } catch (\Exception $e) {
        DB::rollBack();
        return redirect()->route('admin.areas.create')->with('error', 'Không thể tạo khu vực.');
    }
}

    public function show($id)
    {
        try {
            $area = $this->areaService->getById($id);
            return view('admin.pages.area.show', compact('area'));
        } catch (\Exception $e) {
            return redirect()->route('admin.areas.index')->with('error', 'Khu vực không tìm thấy.');
        }
    }

    public function edit($id)
    {
        try {
            $area = $this->areaService->getById($id);
            $cities = City::all(); 
            return view('admin.pages.area.edit', compact('area', 'cities'));
        } catch (\Exception $e) {
            return redirect()->route('admin.areas.index')->with('error', 'Khu vực không tìm thấy.');
        }
    }

    public function update(AreaRequests $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->areaService->update($id, $request);
            DB::commit();
            return redirect()->route('admin.areas.index')->with('success', 'Khu vực đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.areas.edit', $id)->with('error', 'Cập nhật khu vực không thành công.');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->areaService->delete($id);
            DB::commit();
            return redirect()->route('admin.areas.index')->with('success', 'Khu vực đã được xóa thành công.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.areas.index')->with('error', 'Xóa khu vực không thành công.');
        }
    }
}
