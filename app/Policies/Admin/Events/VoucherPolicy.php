<?php

namespace App\Policies\Admin\Events;

use App\Models\User;

class VoucherPolicy
{
    public function viewAny(User $user)
    {
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }
        // Kiểm tra quyền của người dùng
        return $user->hasPermission('view-voucher');
    }
    /**
     * Determine whether the user can create models.
     */
    public function create(User $user)
    {
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }

        return $user->hasPermission('create-voucher');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user)
    {
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }

        return $user->hasPermission('update-voucher');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user)
    {
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }

        return $user->hasPermission('delete-voucher');
    }

    public function deleteMultiple(User $user)
    {
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }

        return $user->hasPermission('delete-multiple-voucher');
    }
}
