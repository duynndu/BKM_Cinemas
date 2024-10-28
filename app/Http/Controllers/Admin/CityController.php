<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Cities\CityRequest;
use App\Services\Admin\Cities\CityService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService =  $cityService;
    }

    public function index()
    {
        $cities = $this->cityService->getAllCities();
        return view('admin.pages.city.index', compact('cities'));
    }

    public function create()
    {
        return view('admin.pages.city.create');
    }

    public function store(CityRequest $request)
    {
        DB::beginTransaction(); 
        try {
            $this->cityService->create($request);
            DB::commit(); 
            return redirect()->route('admin.cities.index')->with('status_succeed', 'Thêm thành phố thành công');
        } catch (\Exception $e) {
            DB::rollBack(); 

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return redirect()->route('aadmin.cities.create')->with('status_failed', 'Không thể tạo thành phố.');
        }
    }
    public function edit($id)
    {
            $city = $this->cityService->findCityById($id);

            if (!$city) {
                return redirect()->route('admin.cities.index')->with(['status_failed' => 'Không tìm thấy!']);
            }
            return view('admin.pages.city.edit', compact('city'));
    }

    public function update(CityRequest $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->cityService->update($id, $request);
            DB::commit(); 
            return redirect()->route('admin.cities.index')->with('status_succeed', 'Cập nhật thành phố thành công');
        } catch (\Exception $e) {
            DB::rollBack();
            
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());
            
            return redirect()->route('admin.cities.edit', $id)->with('status_failed', 'Cập nhật thành phố không thành công.');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction(); 
        try {
            $this->cityService->delete($id);
            DB::commit();
            return redirect()->route('admin.cities.index')->with('status_succeed', 'Xóa thành phố thành công');
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return redirect()->route('admin.cities.index')->with('status_failed', 'Xóa thành phố không thành công.');
        }
        
    }
}
