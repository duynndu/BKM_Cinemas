<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CityRequests;
use App\Services\Admin\Cities\CityService;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

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

    public function store(CityRequests $request)
    {
        DB::beginTransaction(); 
        try {
            $this->cityService->create($request);
            DB::commit(); 
            return redirect()->route('admin.cities.index')->with('success', 'City created successfully.');
        } catch (\Exception $e) {
            DB::rollBack(); 
            return redirect()->route('aadmin.cities.create')->with('error', 'Không thể tạo danh mục.');
        }
    }
    public function edit($id)
    {
        try {
            $city = $this->cityService->findCityById($id);
            return view('admin.pages.city.edit', compact('city'));
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.cities.index')->with('error', 'City not found.');
        } catch (\Exception $e) {
            return redirect()->route('admin.cities.index')->with('error', 'An error occurred.');
        }
    }

    public function update(CityRequests $request, $id)
    {
        DB::beginTransaction();
        try {
            $this->cityService->update($id, $request);
            DB::commit(); 
            return redirect()->route('admin.cities.index')->with('success', 'City updated successfully.');
        } catch (\Exception $e) {
            DB::rollBack(); 
            return redirect()->route('admin.cities.edit', $id)->with('error', 'Cập nhật danh mục không thành công.');
        }
    }

    public function destroy($id)
    {
        DB::beginTransaction(); 
        try {
            $this->cityService->delete($id);
            DB::commit();
            return redirect()->route('admin.cities.index')->with('success', 'City deleted successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.cities.index')->with('error', 'Xóa danh mục không thành công.');
        }
        
    }
}
