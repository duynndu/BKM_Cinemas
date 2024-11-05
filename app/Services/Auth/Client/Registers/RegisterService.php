<?php

namespace App\Services\Auth\Client\Registers;

use App\Models\User;
use App\Repositories\Auth\Client\Registers\Repository\RegisterRepository;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class RegisterService
{
    protected $registerRepository;

    public function __construct(
        RegisterRepository $registerRepository
    )
    {
        $this->registerRepository = $registerRepository;
    }

    public function register($request)
    {
        $data = [
            'role_id' => 0,
            'city_id' => $request->city_id,
            'name' => $request->name,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date_birth' => Carbon::createFromFormat('d/m/Y', $request->date_birth)->format('Y-m-d'),
            'gender' => $request->gender,
            'password' => Hash::make($request->password),
            'type' => User::TYPE_MEMBER,    
            'is_terms_accepted' => $request->is_terms_accepted ?? 0,
            'is_subscribed_promotions' => $request->is_subscribed_promotions ?? 0
        ];

        return $this->registerRepository->createUser($data);
    }
}