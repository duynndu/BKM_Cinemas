<?php

namespace App\Repositories\Admin\Orders\Repositories;

use App\Models\Booking;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Admin\Orders\Interfaces\OrderInterface;

class OrderRepository extends BaseRepository implements OrderInterface
{
    public function getModel()
    {
        return Booking::class;
    }

    public function getAll()
    {
        return $this->model
                ->where('code' , '!=', null)
                ->when(auth()->user()->cinema_id, function ($query, $cinemaId) {
                    $query->where('cinema_id', $cinemaId);
                })
                ->with([
                    'user:id,name',
                    'cinema:id,name',
                    'movie:id,title'
                ])
                ->orderBy('id', 'desc')
                ->paginate(self::PAGINATION);
    }
}
