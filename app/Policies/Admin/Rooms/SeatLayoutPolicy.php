<?php

namespace App\Policies\Admin\Rooms;

use App\Models\User;

class SeatLayoutPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        return $user->hasPermission('view-seat-layout');
    }
    
    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user)
    {
        return $user->hasPermission('view-seat-layout');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        return $user->hasPermission('create-seat-layout');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user)
    {
        return $user->hasPermission('update-seat-layout');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user)
    {
        return $user->hasPermission('delete-seat-layout');
    }

    public function deleteMultiple(User $user)
    {
        return $user->hasPermission('delete-multiple-seat-layout');
    }

    public function changeOrder(User $user)
    {
        return $user->hasPermission('change-order-seat');
    }

    public function changeActive(User $user)
    {
        return $user->hasPermission('change-active-seat');
    }
}
