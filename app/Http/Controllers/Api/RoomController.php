<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Room;
use App\Models\SeatLayout;
use App\Models\Cinema;
use App\Models\SeatType;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::with('seats')->paginate(10); // Adjust the number 10 to your desired items per page
        return response()->json($rooms);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            // 'cinema_id' => 'required|integer|exists cinemas,id',
            'room_name' => 'required|string|max:255',
            'base_price' => 'required|numeric|min:0',
            'col_count' => 'required|integer|min:0',
            'row_count' => 'required|integer|min:0',
            'image' => 'required|image',
            'seats' => 'required|json',
        ]);

        $seatType = SeatType::all()->keyBy('code');
        $room = new Room();
        $room->room_name  = $validatedData['room_name'];
        $room->base_price = $validatedData['base_price'];
        $room->cinema_id  = 1;
        // $room->cinema_id  = $validatedData['cinema_id'];
        $room->image      = $validatedData['image'];
        $room->col_count  = $validatedData['col_count'];
        $room->row_count  = $validatedData['row_count'];
        $seats = json_decode($validatedData['seats'], true);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('seat_layouts', 'public');
            $room->image = $path;
        }
        $room->save();
        foreach ($seats as $seat) {
            if (!$seatType->has($seat['type'])) {
                return response()->json(['error' => "Loại ghế " . $seat['type'] . " không tồn tại, ghế " . $seat['seat_number'] . " không thể tạo"], 404);
            }
            $price = ($room->base_price + $seatType[$seat['type']]->bonus_price) * $seat['slot'];
            $room->seats()->create([
                'room_id' => $room->id,
                'seat_number' => $seat['seat_number'],
                'slot' => $seat['slot'],
                'type' => $seat['type'],
                'visible' => $seat['visible'],
                'merged_seats' => $seat['merged_seats'],
                'order' => $seat['order'],
                'price' => $price,
            ]);
        }
        return response()->json($room);
    }

    /**
     * Display the specified resource.
     */
    public function show(Room $room)
    {
        return response()->json($room->with('seats')->first());
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {

        $validatedData = $request->validate([
            'room_name' => 'sometimes|required|string|max:255',
            'base_price' => 'sometimes|required|numeric|min:0',
            'col_count' => 'sometimes|required|integer|min:0',
            'row_count' => 'sometimes|required|integer|min:0',
            'image' => 'sometimes|image',
            'seats' => 'sometimes|required|json',
        ]);

        $room->room_name  = $validatedData['room_name'];
        $room->base_price = $validatedData['base_price'];
        $room->cinema_id  = 1;
        // $room->cinema_id  = $validatedData['cinema_id'];
        $room->col_count  = $validatedData['col_count'];
        $room->row_count  = $validatedData['row_count'];
        $seats = json_decode($validatedData['seats'], true);
        if ($request->hasFile('image')) {
            if ($room->image) {
                Storage::disk('public')->delete($room->image);
            }
            $path = $request->file('image')->store('seat_layouts', 'public');
            $room->image = $path;
        }
        $room->save();

        if (isset($validatedData['seats'])) {
            $seatType = SeatType::all()->keyBy('code');
            $room->seats()->delete();

            foreach ($seats as $seat) {
                if (!$seatType->has($seat['type'])) {
                    return response()->json(['error' => "Loại ghế " . $seat['type'] . " không tồn tại, ghế " . $seat['seat_number'] . " không thể tạo"], 404);
                }
                $price = ($room->base_price + $seatType[$seat['type']]->bonus_price) * $seat['slot'];
                $room->seats()->create([
                    'seat_number' => $seat['seat_number'],
                    'slot' => $seat['slot'],
                    'type' => $seat['type'],
                    'visible' => $seat['visible'],
                    'merged_seats' => $seat['merged_seats'],
                    'order' => $seat['order'],
                    'price' => $price,
                ]);
            }
        }

        return response()->json($room->load('seats'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
