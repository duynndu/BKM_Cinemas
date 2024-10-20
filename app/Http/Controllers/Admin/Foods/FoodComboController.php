<?php

namespace App\Http\Controllers\Admin\Foods;

use App\Http\Controllers\Controller;
use App\Services\Admin\Foods\FoodComboService;
use Illuminate\Http\Request;

class FoodComboController extends Controller
{
    protected $foodComboService;
    public function __construct(
        FoodComboService $foodComboService
    ) {
        $this->foodComboService = $foodComboService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = $this->foodComboService->getAll();
        return view('admin.pages.foodCombos.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
