<?php

namespace App\Repositories\Auth\Client\Registers\Interface;

interface RegisterInterface
{
    public function createUser($data);
}