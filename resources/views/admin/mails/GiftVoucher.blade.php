<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voucher Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #eef2f3;
            color: #333;
            line-height: 1.6;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 6px 18px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 1px solid #eaeaea;
        }

        .email-header {
            background: linear-gradient(45deg, #007BFF, #00C6FF);
            color: white;
            text-align: center;
            padding: 20px;
        }

        .email-header h1 {
            margin: 0;
            font-size: 20px;
            font-weight: bold;
        }

        .email-body {
            padding: 20px;
        }

        .email-content {
            display: flex;
            flex-direction: row;
            align-items: flex-start;
            gap: 20px;
        }

        .email-content .left-section {
            flex: 1;
        }

        .email-content .right-section {
            flex: 1;
            text-align: center;
        }

        .email-content img {
            max-width: 100%;
            border-radius: 8px;
            border: 1px solid #eaeaea;
        }

        /* Voucher Name */
        .name {
            font-size: 20px;
            font-weight: bold;
            color: #2c3e50;
            margin-bottom: 10px;
        }

        /* Voucher Code */
        .voucher-code a {
            font-size: 16px;
            font-weight: bold;
            color: #007BFF;
            text-decoration: none;
            padding: 10px;
            background: #f4f9ff;
            border: 1px dashed #007BFF;
            border-radius: 8px;
            display: inline-block;
        }

        .voucher-code a:hover {
            background: #eaf2fe;
        }

        /* Sale Price */
        .sale-price {
            font-size: 18px;
            font-weight: bold;
            color: #c72b25;
            background: #fff5f5;
            padding: 2px;
            margin: 5px 0;
        }

        /* Details */
        .details {
            margin-top: 15px;
        }

        .details p {
            font-size: 14px;
            margin: 5px 0;
        }

        .details p strong {
            color: #555;
        }

        /* Footer */
        .footer {
            background: #f4f4f4;
            text-align: center;
            padding: 10px;
            font-size: 14px;
            color: #777;
            border-top: 1px solid #eaeaea;
        }

        .footer p {
            margin: 0;
        }

        .footer a {
            color: #007BFF;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>🎉 Chúc mừng! Bạn nhận được mã giảm giá</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p style="color: black">Xin chào <strong>{{ $user->name }} ({{ $user->email }})</strong>,</p>
            <p style="color: black">Bạn vừa nhận được một mã giảm giá từ <strong>Nguyễn Ngọc Quốc</strong>. Dưới đây là chi tiết mã giảm giá:</p>

            <!-- Content -->
            <div class="email-content">
                <!-- Left Section -->
                <div class="left-section">
                    <div class="name">{{ $voucher->name }}</div>
                    <div class="voucher-code">
                        <a href="http://bkm_cinemas.test">{{ $voucher->code }}</a>
                    </div>
                    <div class="sale-price">
                        Giảm: 
                        @if ($voucher->discount_type == 'money')
                            {{ number_format($voucher->discount_value, 0, ',', '.') }} VNĐ
                        @else
                            {{ $voucher->discount_value }}%
                        @endif
                    </div>
                    @php
                        use Carbon\Carbon;
                    @endphp
                    <div class="details">
                        <p style="color: black"><strong>Ngày bắt đầu:</strong> {{ Carbon::parse($voucher->start_date)->format('d/m/Y H:i') }}</p>
                        <p style="color: black"><strong>Ngày kết thúc:</strong> {{ Carbon::parse($voucher->end_date)->format('d/m/Y H:i') }}</p>
                    </div>
                </div>

              
            </div>
        </div>

        <!-- Footer -->
        <div class="footer">
            <p>© 2024 BKM Cinemas - Rạp chiếu phim 3D công nghệ hàng đầu.</p>
            <p>Thiết kế bởi <a href="#">Mr Quốc</a>.</p>
        </div>
    </div>
</body>
</html>
