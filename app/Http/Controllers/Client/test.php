<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class test extends Controller
{
    public function showDepositForm()
    {
        return view('client.pages.deposit');
    }

    public function generateRandomOrderCode($length = 8)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }

    public function processDeposit(Request $request)
    {
        if($request->payment_method == 'vnpay') {
            $orderCode = $this->generateRandomOrderCode(8);
            
            $vnpayUrl = $this->generateVnpayUrl($orderCode, $request->amount);
            return redirect($vnpayUrl['data']);
        } elseif($request->payment_method == 'momo') {
            dd('Thanh toán MOMO');
        } elseif($request->payment_method == 'zalopay') {
            dd('Thanh toán zalopay');
        }
    }

    public function generateVnpayUrl($orderCode, $amount) // Thêm tham số $request
    {
        $vnp_TmnCode = config('payment.vnpay.vnp_TmnCode');
        $vnp_HashSecret = config('payment.vnpay.vnp_HashSecret');
        $vnp_Url = config('payment.vnpay.vnp_Url');
        $vnp_Returnurl = route('vnpayReturn');

        $vnp_TxnRef = $orderCode;
        $vnp_OrderInfo = "Nạp tiền vào tài khoản";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $amount * 100;
        $vnp_Locale = "vn";
        $vnp_BankCode = "NCB";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

        // Thêm các dữ liệu thanh toán
        $inputData = [
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_Returnurl,
            "vnp_TxnRef" => $vnp_TxnRef
        ];

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return [
            'code' => '00',
            'message' => 'success',
            'data' => $vnp_Url
        ];
    }

    public function vnpayReturn(Request $request)
    {
        $vnp_SecureHash = $request->get('vnp_SecureHash');
        $vnp_TxnRef = $request->get('vnp_TxnRef');
        $vnp_Amount = $request->get('vnp_Amount') / 100;
        $vnp_ResponseCode = $request->get('vnp_ResponseCode');

        // Kiểm tra mã phản hồi
        if ($vnp_ResponseCode == '00') {
            // Thanh toán thành công
            DB::beginTransaction();
            try {
                
                dd('Nạp tiền thành công');

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();

                Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

                return back()->with('error', $e->getMessage());
            }
        } else {
            // Thanh toán đã bị hủy hoặc thất bại
            DB::beginTransaction();
            try {
                dd('Giao dịch đã bị hủy!');
                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();

                Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

                return back()->with('error', $e->getMessage());
            }
        }
    }
}
