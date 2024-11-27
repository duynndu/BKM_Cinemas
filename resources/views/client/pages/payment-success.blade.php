@extends('client.layouts.main')

@section('title', 'Giới thiệu')

@section('css')
    <link rel="stylesheet" href="{{ asset('client/css/payment_success.css') }}">
@endsection

@section('content')
    <div class="success-container ">
        <h1 class="success-title">Đặt Vé Thành Công!</h1>
        <div class="ticket-info text-center">
            <p><strong>Tên phim:</strong> Chiến Địa Tử Thi</p>
            <p><strong>Thời gian chiếu:</strong> 29/11/2024 - 20:00</p>
            <p><strong>Rạp:</strong> Touch Cinema - Hà Nội</p>
            <p><strong>Ghế:</strong> A1, A2, A3</p>
        </div>
        <div class="qr-code">
            <img src="https://touchcinema.com/images/icons/icon-dat-ve.png" alt="QR Code">
            <p>Mã vé: 12345ABC</p>
        </div>
        <div class="button-group ">
            <a href="{{ route('home') }}" class="button">Về Trang Chủ</a>
        </div>
    </div>
@endsection

@section('js')
@endsection
