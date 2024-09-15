<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SeatLayout;

class SeatLayoutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $seats = SeatLayout::all();
        return response()->json($seats, 200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            // 'room_id' => 'required|integer',
            'col_count' => 'required|integer',
            'row_count' => 'required|integer',
            'seats' => 'required|json',
            'image' => 'nullable|image',
        ]);

        $seatLayout = new SeatLayout();
        $seatLayout->name = $validatedData['name'];
        // $seatLayout->room_id = $validatedData['room_id'];
        $seatLayout->col_count = $validatedData['col_count'];
        $seatLayout->row_count = $validatedData['row_count'];
        $seatLayout->seats = json_decode($validatedData['seats'], true);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('seat_layouts', 'public');
            $seatLayout->image = $path;
        }

        $seatLayout->save();

        return response()->json($seatLayout, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $seatLayout = SeatLayout::find($id);
        return response()->json($seatLayout, 200);
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
