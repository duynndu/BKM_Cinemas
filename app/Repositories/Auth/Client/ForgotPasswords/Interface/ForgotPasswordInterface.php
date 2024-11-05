<?php

namespace App\Repositories\Auth\Client\ForgotPasswords\Interface;

interface ForgotPasswordInterface
{
    public function getUserByEmail($email);
}