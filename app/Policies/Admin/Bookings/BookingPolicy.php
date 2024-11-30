<?php

namespace App\Policies\Admin\Bookings;

use App\Models\User;

class BookingPolicy
{
    public function viewAny(User $user)
    {
        return $user->hasPermission('view-booking');
    }

    public function viewDetail(User $user)
    {
        return $user->hasPermission('view-detail');
    }
}
