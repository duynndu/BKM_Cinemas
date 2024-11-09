<?php

namespace App\Http\Controllers\Api;

use App\Constants\SeatType as ConstantsSeatType;
use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\SeatType;
use App\Models\Showtime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $request->validate([
            'start_time' => 'required|date',
            'end_time' => 'required|date',
            'room_id' => 'required|integer|exists:rooms,id',
        ]);
        $data = $request->all();
        $showtime = Showtime::create([
            'cinema_id' => auth()->user()->cinema_id,
            'start_time' => $data['start_time'],
            'end_time' => $data['end_time'],
            'room_id' => $data['room_id'],
        ]);
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

    public function getShowtimeDetailById(Showtime $showtime)
    {
        $seats = DB::select("
        SELECT seats.*, IF(seats.type = ?, 'unavailable', IF(bs.booking_id is null, 'available', 'occupied')) as status
        FROM seats
        LEFT JOIN booking_seats as bs ON seats.id = bs.seat_id
        WHERE seats.room_id = ? AND seats.deleted_at IS NULL
    ", [ConstantsSeatType::EMPTY_SEAT, $showtime->room_id]);
        $seatTypes = collect($seats)
            ->filter(fn($seat) => $seat->type !== ConstantsSeatType::EMPTY_SEAT)
            ->map(fn($seat) => $seat->type)->unique()->values()->toArray();
        $seatTypes = SeatType::whereIn('code', $seatTypes)->get();
        $room = Room::find($showtime->room_id);
        $room->seats = $seats;
        $room->seat_types = $seatTypes;
        $showtime->room = $room;
        $showtime->load(['movie', 'cinema']);
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
            'cinema_id' => 'nullable|integer|exists:cinemas,id',
        ]);
        $cinemaId = $request->cinema_id ?? auth()->user()->cinema_id;

        $startDate = $request->start_date;
        $showtimes = Showtime::whereDate('start_time', '=', Carbon::parse($startDate)->toDateString())
            ->where('room_id', '=', $request->room_id)
            ->where('cinema_id', '=', $cinemaId)
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
