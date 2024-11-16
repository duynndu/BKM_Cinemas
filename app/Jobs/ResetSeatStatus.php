<?php

namespace App\Jobs;

use App\Constants\SeatStatus;
use App\Events\BookSeat;
use Exception;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;

class ResetSeatStatus implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $showtimeId;
    private $seatNumber;

    public function __construct($showtimeId, $seatNumber)
    {
        $this->showtimeId = $showtimeId;
        $this->seatNumber = $seatNumber;
    }

    public function handle()
    {
        $seats = Cache::get("showtime.$this->showtimeId.seats");
        if ($seats[$this->seatNumber]->status == SeatStatus::BOOKING) {
            BookSeat::dispatch($this->showtimeId, $this->seatNumber);
        }
    }
}
