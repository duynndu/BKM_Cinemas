<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class BookSeat
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $showtimeId;
    public function __construct($showtimeId)
    {
        $this->showtimeId = $showtimeId;
    }
    
    public function broadcastOn(): array
    {
        return [
            new PresenceChannel("showtime.$this->showtimeId"),
        ];
    }
}
