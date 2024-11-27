@extends('client.layouts.main')

@section('title', 'Giới thiệu')

@section('css')
<link rel="stylesheet" href="{{ asset('client/css/payment_success.css') }}">
@endsection

@section('content')
<div class="success-container">
    <h1 class="success-title">Đặt Vé Thành Công!</h1>
    <div class="ticket-info text-center">
        <p><strong>Tên phim:</strong> {{$movie->title}}</p>
        <p><strong>Thời gian chiếu:</strong> {{ \Carbon\Carbon::parse($showtime->start_time)->format('d/m/Y - H:i') }}</p>
        <p><strong>Rạp:</strong> Touch Cinema - Hà Nội</p>
        <p><strong>Ghế:</strong> {{implode(', ', $seatsBooking)}}</p>
    </div>
    <div class="qr-code">
        <div style="display: flex; justify-content: center;">
            <div style="position: relative;">
                <canvas id="qrcode"></canvas>
                <img style="position: absolute;width: 50px;right: -30px;top: -15px;" src="https://touchcinema.com/images/icons/icon-dat-ve.png" alt="QR Code">
            </div>
        </div>
        <p>Mã vé: {{$code}}</p>
    </div>
    <div class="button-group ">
        <a href="{{ route('home') }}" class="button">Về Trang Chủ</a>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/qrcode/build/qrcode.min.js"></script>
<script>
    QRCode.toCanvas(document.getElementById('qrcode'), '{{$code}}', function(error) {
        if (error) console.error(error);
        console.log('Success!');
    });
</script>
@endsection