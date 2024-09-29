<?php

namespace App\Repositories\Auth\Admin\Logins\Repository;

use App\Models\User;
use App\Repositories\Auth\Admin\Logins\Interface\LoginInterface;

class LoginRepository implements LoginInterface
{
    protected $user;

    public function __construct(
        User $user
    )
    {
        $this->user = $user;
    }

    public function checkEmailGuard($email)
    {
        return $this->user->select('id', 'email', 'password', 'type', 'status')
            ->where('email', strtolower($email))
            ->whereIn('type', [
                'admin',
                'director',
                'departmentHead',
                'frontend',
                'backend',
                'management',
                'administrative',
                'staff'
            ])->first();
    }
}
