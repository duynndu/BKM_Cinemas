<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;

class CashController extends Controller
{
    public function createPayment(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'checkin_date' => 'required|date|after:today',
            'checkout_date' => 'required|date|after:checkin_date',
        ]);

//        $room = Room::find($request->room_id);
//        if (!$room) {
//            return response()->json(['error' => 'Room not found'], 404);
//        }

        $bookedRooms = Booking::whereBetween('checkin_date', [$request->checkin_date, $request->checkout_date])
            ->orWhereBetween('checkout_date', [$request->checkin_date, $request->checkout_date])
            ->pluck('room_id');

//        if ($bookedRooms->contains($room->id)) {
//            return response()->json(['error' => 'Room is already booked']);
//        }

//        $price = $room->price * (Carbon::parse($request->checkout_date)->diffInDays(Carbon::parse($request->checkin_date)));

        // Create a new booking record with the status "pending"
//        $booking = Booking::create([
//            'room_id' => $request->room_id,
//            'user_id' => $request->user_id,
//            'name' => $request->name,
//            'email' => $request->email,
//            'phone' => $request->phone,
//            'checkin_date' => Carbon::parse($request->checkin_date)->format('Y-m-d H:i:s'),
//            'checkout_date' => Carbon::parse($request->checkout_date)->format('Y-m-d H:i:s'),
//            'total_price' => $price,
//            'payment_method' => 'cash',
//            'is_paid' => false,
//        ]);

        // Send an email or notification to the admin to confirm the cash payment
        // You can use Laravel's built-in email or notification system for this

        return response()->json([
            'message' => 'Cash payment created successfully',
//            'booking' => $booking
        ]);
    }
}
