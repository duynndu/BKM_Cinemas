<?php

namespace App\Policies\Admin\Bookings;

use App\Models\User;

class BookingPolicy
{
    public function viewAny(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('view-booking');
    }

    public function changeStatus(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('change-status-booking');
    }
    public function changeRefundStatus(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('change-refund-status-booking');
    }

    public function getTickets(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('get-tickets-booking');
    }
}
