<?php

namespace App\Events;

use App\Constants\SeatStatus;
use App\Jobs\ResetSeatStatus;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class BookSeat implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $seats;
    public $seat;

    public $showtimeId;
    public function __construct($showtimeId, $seatNumber)
    {
        $this->seats = Cache::get("showtime.$showtimeId.seats");
        $this->seat = $this->seats[$seatNumber];
        $userId = optional(auth()->user())->id;
        if ($this->seat->status == SeatStatus::AVAILABLE) {
            $currentOrder = collect($this->seats)->where('user_id', $userId)->max('selected_order') ?? 0;
            $this->seat->selected_order = $currentOrder + 1;
            $this->seat->status = SeatStatus::BOOKING;
            $this->seat->user_id = $userId;
            ResetSeatStatus::dispatch($showtimeId, $seatNumber)->delay(now()->addSeconds(30));
        } else {
            $this->seat->status = SeatStatus::AVAILABLE;
            $this->seat->user_id = null;
        }
        $this->seats[$seatNumber] = $this->seat;
        $this->showtimeId = $showtimeId;
        Cache::put("showtime.$showtimeId.seats", $this->seats);
    }

    public function broadcastOn(): array
    {
        return [
            new PresenceChannel("showtime.$this->showtimeId"),
        ];
    }
}
