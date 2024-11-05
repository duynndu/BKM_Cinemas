<?php

namespace App\Http\Controllers\Auth\Client;

use App\Events\Client\ForgotPasswordRequested;
use App\Events\Client\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Client\ForgotPasswordRequest;
use App\Http\Requests\Auth\Client\LoginRequest;
use App\Http\Requests\Auth\Client\RegisterRequest;
use App\Http\Requests\Auth\Client\ResetPasswordRequest;
use App\Models\PasswordResetToken;
use App\Models\User;
use App\Services\Auth\Client\Registers\RegisterService;
use App\Services\Client\Cities\CityService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    protected $cityService;

    protected $registerService;

    public function __construct(
        CityService $cityService,
        RegisterService $registerService
    ) {
        $this->cityService = $cityService;
        $this->registerService = $registerService;
    }

    public function account()
    {
        $cities = $this->cityService->getAllCity();
        return view('client.pages.auth.auth', compact('cities'));
    }

    public function login(LoginRequest $request)
    {
        try {
            $loginType = filter_var($request->emailOrPhone, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

            $credentials = [
                $loginType => $request->emailOrPhone,
                'password' => $request->password
            ];

            $remember = $request->has('remember');

            if (Auth::attempt($credentials, $remember)) {
                $user = Auth::user();
                $token = $user->createToken('AuthToken')->plainTextToken;

                return response()->json([
                    'status' => true,
                    'message' => 'Đăng nhập thành công.',
                    'user' => $user,
                    'token' => $token,
                    'url' => route('home')
                ], Response::HTTP_OK);
            }

            return response()->json([
                'status' => false,
                'message' => 'Thông tin đăng nhập không chính xác.'
            ], Response::HTTP_UNAUTHORIZED);

        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function register(RegisterRequest $request)
    {
        DB::beginTransaction();
        try {
            $user = $this->registerService->register($request);

            event(new UserRegistered($user));

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Đăng ký tài khoản thành công!'
            ], Response::HTTP_OK);
        } catch (\Exception $exception) {
            DB::rollBack();

            Log::error('Lỗi đăng ký người dùng', [
                'message' => $exception->getMessage(),
                'trace' => $exception->getTrace()
            ]);

            return response()->json([
                'success' => false,
                'message' => 'Đã xảy ra lỗi trong quá trình đăng ký. Vui lòng thử lại sau.',
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function logout(Request $request)
    {
        try {
            $user = $request->user();

            if ($user) {
                $user->tokens()->delete();
            }

            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect()->route('home');
        } catch (\Exception $e) {
            return redirect()->route('home')->withErrors('Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }

    public function sendResetLinkEmail(ForgotPasswordRequest $request)
    {
        try {
            $user = User::where('email', $request->email)->first();
            $token = Str::random(60);

            PasswordResetToken::updateOrInsert(
                ['email' => $user->email],
                ['token' => $token, 'created_at' => now()]
            );

            event(new ForgotPasswordRequested($token, $user));

            return response()->json([
                'sendResetLink' => true,
                'message' => 'Yêu cầu thay đổi mật khẩu đã được gửi đến email của bạn. Vui lòng kiểm tra lại email.',
            ], 201);
        } catch (\Exception $e) {
            return response()->json([
                'sendResetLink' => false,
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }


    public function forgotPassword(Request $request)
    {
        $token = $request->query('code');
        $email = $request->query('email');

        session(['reset_token' => $token, 'reset_email' => $email]);

        return view('client.pages.auth.forgot-password', [
            'token' => $token,
            'email' => $email
        ]);
    }

    public function resetPassword(ResetPasswordRequest $request)
    {
        try {
            $token = session('reset_token');
            $email = session('reset_email');

            if (!$token || !$email) {
                return response()->json([
                    'sendResetPassword' => false,
                    'message' => 'Token hết hạn hoặc không hợp lệ. Vui lòng thử lại.',
                ], 401);
            }

            $reset = PasswordResetToken::where('token', $token)
                ->where('email', $email)
                ->first();

            if (!$reset) {
                return response()->json([
                    'sendResetPassword' => false,
                    'message' => 'Đường dẫn đặt lại mật khẩu đã hết hạn. Vui lòng thử lại.',
                ], 401);
            }

            $user = User::where('email', $reset->email)->first();

            if ($user) {
                $user->password = Hash::make($request->password);
                $user->save();
            }

            PasswordResetToken::where('token', $token)->delete();
            session()->forget(['reset_token', 'reset_email']);

            return response()->json([
                'sendResetPassword' => true,
                'message' => 'Mật khẩu đã được thay đổi thành công.',
                'url' => route('account'),
            ], 201);

        } catch (\Exception $e) {
            return response()->json([
                'sendResetPassword' => false,
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }
}
