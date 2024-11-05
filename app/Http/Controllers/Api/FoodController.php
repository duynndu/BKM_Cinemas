<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Food;
use App\Models\FoodCombo;
use App\Models\FoodType;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;
use stdClass;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = FoodType::with('foods')->get();
        $combo = new stdClass();
        $combo->name = 'combo';
        $combo->foods = FoodCombo::with('foods')->get();
        $data->push($combo);

        return response()->json($data);
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
