<?php

namespace App\Services\Auth\Admin\Logins;

use App\Repositories\Auth\Admin\Logins\Repository\LoginRepository;

class LoginService
{
    protected $loginRepository;

    public function __construct(
        LoginRepository $loginRepository
    )
    {
        $this->loginRepository = $loginRepository;
    }

    public function checkEmailGuard($email)
    {
        return $this->loginRepository->checkEmailGuard($email);
    }
}
