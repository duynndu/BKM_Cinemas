<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\RefreshToken;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'refreshToken']]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $credentials = $request->only('email', 'password');
        // tạo jwt token 1 phút
        $token = auth()->setTTL(20)->attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Unauthorized',
            ], 401);
        }
        $user = auth()->user();
        //xác xuất để hai refreshToken trùng nhau  1,158,978,354,491,851,639,826,417,791,383,476,832
        $refreshToken = Str::random(60);
        RefreshToken::create([
            'user_id' => $user->id,
            'refresh_token' => $refreshToken,
            'expires_at' => now()->addDay(1)
        ]);

        return response()->json([
            'Id' => $user->id,
            'Name' => $user->name,
            'Phone' => $user->phone,
            'Email' => $user->email,
            'Email_verified_at' => $user->email_verified_at,
            'JwtToken' => $token,
            'RefreshToken' => $refreshToken,
            'Role' => $user->role,
            'Created_at' => $user->created_at,
            'Updated_at' => $user->updated_at,
        ]);

    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $token = Auth::login($user);
        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }


    public function refreshToken(Request $request)
    {
        $refreshToken = RefreshToken::where('refresh_token', $request->refreshToken)->where('expires_at', '>', now())->first();
        if ($refreshToken != null) {
            $user = $refreshToken->user;
            $token = auth()->setTTL(1)->login($user);
            return response()->json([
                'JwtToken' => $token
            ]);
        }
        return response()->json([
            'status' => 'error',
            'message' => 'Invalid refresh token',
        ], 401);
    }

}
