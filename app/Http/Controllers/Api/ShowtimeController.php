<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShowtimeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $showtimes = Showtime::all();
        return response()->json($showtimes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $showtime = Showtime::create($request->all());
        return response()->json($showtime, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $showtime = Showtime::findOrFail($id);
        return response()->json($showtime);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $showtime = Showtime::findOrFail($id);
        $showtime->update($request->all());
        return response()->json($showtime, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $showtime = Showtime::findOrFail($id);
        $showtime->delete();
        return response()->json(null, 204);
    }

    public function getShowtimesByDayAndRoomId(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'room_id' => 'required|integer|exists:rooms,id',
        ]);

        $startDate = $request->start_date;
        $showtimes = Showtime::whereDate('start_time', '=', Carbon::parse($startDate)->toDateString())
            ->where('room_id', '=', $request->room_id)
            ->with('movie')
            ->get();
        return response()->json($showtimes);
    }

    public function clearShowtimeMovie(Showtime $showtime)
    {
        $showtime->movie_id = null;
        $showtime->save();
        return response()->json($showtime, 200);
    }

    public function updateShowtimeMovie(Request $request, Showtime $showtime)
    {
        $showtime->movie_id = $request->movie_id;
        $showtime->save();
        $showtime->load('movie');
        return response()->json($showtime, 200);
    }
}
