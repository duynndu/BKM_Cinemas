<?php

namespace App\Repositories\Auth\Client\Registers\Repository;

use App\Models\User;
use App\Repositories\Auth\Client\Registers\Interface\RegisterInterface;

class RegisterRepository implements RegisterInterface
{
    protected $user;

    public function __construct(
        User $user
    ) {
        $this->user = $user;
    }
    
    public function createUser($data)
    {
        return $this->user->create($data);
    }
}