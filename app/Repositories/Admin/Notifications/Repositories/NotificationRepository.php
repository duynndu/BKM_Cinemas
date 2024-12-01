<?php

namespace App\Repositories\Admin\Notifications\Repositories;

use App\Constants\MemberLevel;
use App\Models\Booking;
use App\Models\Notification;
use App\Repositories\Admin\Notifications\Interfaces\NotificationInterface;
use App\Repositories\Base\BaseRepository;

class NotificationRepository extends BaseRepository implements NotificationInterface
{
    public function getModel()
    {
        return Notification::class;
    }

    public function getByType($type)
    {
        return $this->model->where('type', $type)->orderBy('id', 'desc')->get();
    }
}
