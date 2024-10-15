<?php

namespace App\Http\Controllers\Admin\Foods;

use App\Http\Controllers\Controller;
use App\Services\Admin\Foods\FoodTypeService;
use Illuminate\Http\Request;

class FoodTypeController extends Controller
{
    protected $foodTypeService;

    public function __construct(
        FoodTypeService $foodTypeService
    )
    {
        $this->foodTypeService = $foodTypeService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->foodTypeService->test();
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
