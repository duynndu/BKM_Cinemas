<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Areas\AreaRequest;
use App\Services\Admin\Areas\AreaService;
use App\Models\City;
use App\Services\Admin\Cities\CityService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class AreaController extends Controller
{
    protected $areaService;

    protected $cityService;


    public function __construct(AreaService $areaService, CityService $cityService)
    {
        $this->areaService = $areaService;
        $this->cityService = $cityService;
    }

    public function index()
    {
        $areas = $this->areaService->getAllArea();
        $cities = $this->areaService->getAllCities();
        
        return view('admin.pages.area.index', compact('areas', 'cities'));
    }

    public function create()
    {
        
        $cities = $this->cityService->getAllCities();
        return view('admin.pages.area.create', compact('cities'));
    }

    public function store(AreaRequest $request)
    {
        DB::beginTransaction();
        try {
            $this->areaService->create($request);
            DB::commit();
            return redirect()->route('admin.areas.index')->with('status_succeed', 'Khu vực đã được tạo thành công.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::status_failed('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return redirect()->route('admin.areas.create')->with('status_failed', 'Không thể tạo khu vực.');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $area = $this->areaService->getById($id);
        $cities = $this->cityService->getAllCities();
        return view('admin.pages.area.edit', compact('area', 'cities'));
    }

    public function update(AreaRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->areaService->update($id, $request);
            DB::commit();
            return redirect()->route('admin.areas.index')->with('status_succeed', 'Khu vực đã được cập nhật thành công.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::status_failed('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return redirect()->route('admin.areas.edit', $id)->with('status_failed', 'Cập nhật khu vực không thành công.');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->areaService->delete($id);
            DB::commit();
            return redirect()->route('admin.areas.index')->with('status_succeed', 'Khu vực đã được xóa thành công.');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::status_failed('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return redirect()->route('admin.areas.index')->with('status_failed', 'Xóa khu vực không thành công.');
        }
    }
}
