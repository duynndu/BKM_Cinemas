<?php

namespace App\Http\Controllers\Api;

use App\Constants\SeatStatus;
use App\Constants\Status;
use App\Events\BookSeat;
use App\Events\OrderStatusUpdated;
use App\Http\Controllers\Controller;
use App\Jobs\ResetSeatStatus;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Services\Admin\Orders\Interfaces\OrderServiceInterface;

class BookingController extends Controller
{
    private $orderService;
    public function __construct(
        OrderServiceInterface $orderService
    ){
        $this->orderService = $orderService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'seats' => 'required|array|min:1',
            'foods' => 'nullable',
            'movie_id' => 'required|integer',
            'showtime_id' => 'required|integer',
            'payment_id' => 'required|integer'
        ]);

        $seats = collect($request->seats)->map(function ($seat) {
            return [
                'seat_id' => $seat['id'],
            ];
        });

        $foods = collect($request->foods)->map(function ($food) {
            return [
                'food_id' => $food['id'],
                'quantity' => $food['quantity'],
            ];
        });
        DB::beginTransaction();
        try {
            $booking = new Booking();
            $booking->cinema_id = auth()->user()->cinema_id;
            $booking->user_id = auth()->id();
            $booking->movie_id = $request->movie_id;
            $booking->showtime_id = $request->showtime_id;
            $booking->payment_id = $request->payment_id;
            $booking->save();
            $booking->seatsBooking()->createMany($seats);
            $booking->foodsBooking()->createMany($foods);
            $booking->total_price = $booking->totalPrice();
            $booking->save();
            DB::commit();
            BookSeat::dispatch($booking->showtime_id, collect($request->seats)->pluck('seat_number'), [
                'action' => 'set',
                'value' => SeatStatus::BOOKED
            ]);
            DB::table('jobs')
                ->where('payload', 'LIKE', '%' . $booking->showtime_id . '%')
                ->where('payload', 'LIKE', '%' . $booking->user_id . '%')
                ->delete();
            $endTime = now()->addSeconds(180);
            ResetSeatStatus::dispatch($request->showtime_id, auth()->id(), 'SEAT_AWAITING_PAYMENT_ACTION')->delay($endTime);
            $booking->endTime = $endTime->toIso8601String();
            return response()->json($booking, 201);
        } catch (\Exception $error) {
            DB::rollBack();
            BookSeat::dispatch($request->showtime_id, collect($request->seats)->pluck('seat_number'), [
                'action' => 'set',
                'value' => SeatStatus::AVAILABLE
            ]);
            return response()->json(['message' => $error->getMessage()], 500);
        }
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

    public function changeStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:pending,completed,failed,cancelled,waiting_for_cancellation,rejected'],
        ]);

        $record = $this->orderService->find($id);

        if (empty($record)) {
            return response()->json(['failed' => 'Không tìm thấy!'], 404);
        }

        $record->status = $validated['status'];
        $record->save();

        broadcast(new OrderStatusUpdated(['id' => $id, 'status' => $record->status]))->toOthers();

        return response()->json(['success' => 'Thành công!'], 200);
    }
}
