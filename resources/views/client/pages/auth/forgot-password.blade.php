@extends('client.layouts.main')

@section('title', 'Đăng ký - Đăng nhập | BKM Cinemas')

@section('css')
    <style>
        .swal2-popup {
            background-color: #f0f8ff;
            border-radius: 10px;
        }

        .swal2-title {
            color: #333;
            font-size: 20px;
        }

        .swal2-image {
            border-radius: 10px;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row" style="margin-bottom: 20px">
            <div class="">
                <img width="100%" src="https://bhdstar.vn/wp-content/uploads/2024/10/banner-top.jpg" alt="">
            </div>
        </div>
        <div class="row ticket-login">
            <div class="col-md-12 col-sm-12 login-wrap">
                <div class="tab-content">
                    <div id="quen-mat-khau">
                        <div class="text-center">
                            <h2>Khôi phục mật khẩu đăng nhập</h2>
                        </div>
                        <div style="padding: 0 20px 20px 20px; display: flex; flex-direction: column;" class="main-forgotpassword">
                            <div style="width: 50%; margin: 20px 0;">
                                <form 
                                    data-image="{{ asset('images/success.png') }}"
                                    data-token="{{ !empty($token) ? $token : '' }}"
                                    data-email="{{ !empty($email) ? $email : '' }}"
                                    id="confirmResetPassword" action="{{ route('resetPassword') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="password">Mật khẩu mới:</label>
                                        <input id="password" type="text" name="password"
                                            class="form-control password">
                                        <div class="password_error"></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="password_confirmation">Nhập lại mật khẩu mới:</label>
                                        <input id="password_confirmation" type="text" name="password_confirmation"
                                            class="form-control password_confirmation">
                                        <div class="password_confirmation_error"></div>
                                    </div>

                                    <button type="submit" class="btn btn-primary btn-login">
                                        Đổi mật khẩu
                                    </button>
                                </form>
                            </div>
                            <div>
                                <a style="color: #f29438;" href="{{ route('account') }}">Quay lại trang đăng nhập</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{ asset('js/client/auth/auth.js') }}"></script>
@endsection
