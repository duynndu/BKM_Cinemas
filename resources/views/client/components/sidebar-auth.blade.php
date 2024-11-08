<ul class="nav nav-tabs menu" style="display: flex; flex-direction: column">
    @guest
        <li class="active">
            <a data-toggle="tab" href="#dang-nhap" aria-expanded="true">Đăng nhập</a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#dang-ky" aria-expanded="false">Đăng ký</a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#quen-mat-khau" aria-expanded="false">Quên mật khẩu</a>
        </li>
    @else
        <li class="">
            <a data-toggle="tab" href="#tichluydiem" aria-expanded="false">Tích lũy điểm</a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#uudaichung" aria-expanded="false">Ưu đãi chung</a>
        </li>
        <li class="">
            <a data-toggle="tab" href="#dkdoithuong" aria-expanded="false">Điều kiện đổi thưởng</a>
        </li>
    @endguest
</ul>
<div class="member-card">
    <img src="{{ asset('client/images/member-card.png') }}" alt="member-card">
</div>
