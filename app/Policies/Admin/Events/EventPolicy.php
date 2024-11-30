<?php

namespace App\Policies\Admin\Events;

use App\Models\User;

class EventPolicy
{
    public function viewAny(User $user)
    {
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }
        // Kiểm tra quyền của người dùng
        return $user->hasPermission('view-event');
    }
}
