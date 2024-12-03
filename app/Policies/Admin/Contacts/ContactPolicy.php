<?php

namespace App\Policies\Admin\Contacts;

use App\Models\User;

class ContactPolicy
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
        if ($user->type == User::TYPE_ADMIN) {
            return true;
        }

        return $user->hasPermission('view-contact');
    }
}
