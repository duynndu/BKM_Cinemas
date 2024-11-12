<?php

namespace App\Http\Controllers\Auth\Client;

use App\Events\Client\ForgotPasswordRequested;
use App\Events\Client\PasswordChanged;
use App\Events\Client\UserRegistered;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\Client\ChangePasswordRequest;
use App\Http\Requests\Auth\Client\ForgotPasswordRequest;
use App\Http\Requests\Auth\Client\LoginRequest;
use App\Http\Requests\Auth\Client\RegisterRequest;
use App\Http\Requests\Auth\Client\ResetPasswordRequest;
use App\Repositories\Auth\Client\ChangePasswords\Interface\ChangePasswordInterface;
use App\Repositories\Auth\Client\ForgotPasswords\Interface\ForgotPasswordInterface;
use App\Services\Auth\Client\Registers\Interfaces\RegisterServiceInterface;
use App\Services\Client\Cities\Interfaces\CityServiceInterface;
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

    protected $forgotPassword;

    protected $changePassword;

    public function __construct(
        CityServiceInterface           $cityService,
        RegisterServiceInterface       $registerService,
        ForgotPasswordInterface        $forgotPassword,
        ChangePasswordInterface        $changePassword
    ) {
        $this->cityService = $cityService;
        $this->registerService = $registerService;
        $this->forgotPassword = $forgotPassword;
        $this->changePassword = $changePassword;
    }

    public function account()
    {
        $cities = $this->cityService->getAll();
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
            $user = $this->registerService->create($request);

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
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return redirect()->route('home')->withErrors('Đã xảy ra lỗi: ' . $e->getMessage());
        }
    }

    public function sendResetLinkEmail(ForgotPasswordRequest $request)
    {
        try {
            $user = $this->forgotPassword->getUserByEmail($request->email);

            $token = Str::random(60);

            $this->forgotPassword->updateOrInsert(
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

            $reset = $this->forgotPassword->getResetToken($token, $email);

            if (!$reset) {
                return response()->json([
                    'sendResetPassword' => false,
                    'message' => 'Đường dẫn đặt lại mật khẩu đã hết hạn. Vui lòng thử lại.',
                ], 401);
            }

            $user = $this->forgotPassword->getUserByEmail($reset->email);

            if ($user) {
                $this->forgotPassword->update($user->id, [
                    'password' => Hash::make($request->password),
                ]);
            }

            $this->forgotPassword->deleteByToken($token);

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

    public function changePassword(ChangePasswordRequest $request)
    {
        try {
            $this->changePassword->update(Auth::user()->id, [
                'password' => Hash::make($request->password)
            ]);

            event(new PasswordChanged(Auth::user()));

            return response()->json([
                'status' => true,
                'message' => 'Mật khẩu đã được thay đổi thành công.',
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => false,
                'message' => 'Đã xảy ra lỗi: ' . $e->getMessage(),
            ], 500);
        }
    }
}
