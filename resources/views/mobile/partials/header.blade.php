<div id="header">
    <div id="logo">
        <a href="{{ url('') }}">
            <img src="{{ asset('images/logo.png') }}" width="97px" height="80px" alt="BKM-Cinemas">
        </a>
    </div>

    <div class="header_right">
        <div id="search">
            <a href="javascript:;" class="show-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </a>
        </div>
        <div id="menu">
            <ul>
                <li>
                    <a href="#">
                        <img width="25" src="https://m.touchcinema.com/statics/mobile/images/login-icon.png"
                            alt="Đăng nhập vào Touchcinema">
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="https://m.touchcinema.com/login">
                                Đăng nhập
                            </a>
                        </li>
                        <li>
                            <a href="https://m.touchcinema.com/register">
                                Đăng ký
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>

        </div>

        {{-- Đăng nhập rồi --}}
        {{-- <div id="menu">
            <ul>
                <li>
                    <a href="#" class="avatar-user">
                        <img src="https://lh3.googleusercontent.com/a/ACg8ocJ0DSz_GDjnfix_87kgjKwDdGpjB_yHFo8f1eDDIy60h2xlaZg=s96-c"
                            alt="trannhat29" style="height: 25px;text-indent: -1000px;width: 25px;display: block;">
                    </a>
                    <ul class="submenu">
                        <li><a href="https://m.touchcinema.com/account">Xem thông tin cá nhân</a></li>
                        <li><a href="https://m.touchcinema.com/account/transaction">Lịch sử mua vé</a></li>
                        <li><a href="javascript:;">Đổi thưởng</a></li>
                        <li><a href="https://m.touchcinema.com/account/profile">Đổi thông tin</a></li>
                        <li><a href="https://m.touchcinema.com/account/password">Đổi mật khẩu</a></li>
                        <li><a href="https://m.touchcinema.com/logout">Đăng xuất</a></li>
                    </ul>
                </li>
            </ul>
        </div> --}}


    </div>

</div>
<div id="m-search">
    <form action="https://m.touchcinema.com/tim-kiem">
        <input name="k" type="search" placeholder="Tìm kiếm" value="">
        <button> <i class="fa-solid fa-magnifying-glass"></i>
        </button>
    </form>
</div>
</div>
