<?php

namespace App\Policies\Admin\Rooms;

use App\Models\User;

class RoomPolicy
{
    public function viewAny(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('view-room');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('view-room');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('create-room');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('update-room');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user)
    {
        if($user->type == User::TYPE_MANAGE || $user->type == User::TYPE_STAFF) {
            return true;
        }
        return $user->hasPermission('delete-room');
    }
}
