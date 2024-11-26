<?php

namespace App\Repositories\Client\Bookings\Repositories;

use App\Models\Booking;
use App\Repositories\Base\BaseRepository;

class BookingRepository extends BaseRepository
{
    public function getModel()
    {
        return Booking::class;
    }

    public function getTicketsByUserId($id)
    {
        return $this->model->with(['user','cinema','movie','showtime'])
            ->where('user_id', $id ?? 0)
            ->orderBy('id', 'DESC')
            ->paginate(10);
    }
}
