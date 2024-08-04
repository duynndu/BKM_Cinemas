<html>
<head>
    <title>Room Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
        }
        .content {
            padding: 20px;
        }
        .booking-details {
            margin-bottom: 20px;
        }
        .booking-details dt {
            font-weight: bold;
            margin-top: 10px;
        }
        .booking-details dd {
            margin-bottom: 10px;
        }
        .important-notes {
            background-color: #f0f0f0;
            padding: 10px;
            border: 1px solid #ddd;
        }
        .important-notes ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .important-notes li {
            margin-bottom: 10px;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
            clear: both;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="header">
        <h1>Room Booking Completed</h1>
    </div>
    <div class="content">
        <h2>Dear {{auth()->user()->name ?? $options['name']}},</h2>
        <p>We are thrilled to inform you that your room booking at Super golden DUYNNZ has been successfully confirmed!</p>
        <div class="booking-details">
            <dl>
                <dt>Room Type:</dt>
                <dd>Best practice room</dd>
                <dt>Check-in Date:</dt>
                <dd>{{$options['checkin_date']}}</dd>
                <dt>Check-out Date:</dt>
                <dd>{{$options['checkout_date']}}</dd>
                <dt>Total price:</dt>
                <dd>{{$options['total_price']}}</dd>
                <dt>Number of Guests: 4</dt>

                <dd>4</dd>
            </dl>
        </div>
        <div class="important-notes">
            <h3>Important Notes:</h3>
            <ul>
                <li>Please arrive at the hotel by [Check-in Time] to ensure a smooth check-in process.</li>
                <li>If you have any special requests or requirements, please contact us at 0987654321.</li>
                <li>Cancellation policies apply. Please refer to our website for more information.</li>
            </ul>
        </div>
        <p>Thank you for choosing Super golden DUYNNZ! We look forward to welcoming you soon.</p>
    </div>
    <div class="footer">
        <p>Best hotel</p>
        <p>Super golden DUYNNZ</p>
    </div>
</div>
</body>
</html>
