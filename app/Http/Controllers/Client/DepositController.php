<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\Deposits\Interfaces\DepositServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class DepositController extends Controller
{
    protected $depositService;

    public function __construct(
        DepositServiceInterface $depositService
    )
    {
        $this->depositService = $depositService;
    }

    public function generateRandomOrderCode($length = 8)
    {
        return substr(str_shuffle('ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789'), 0, $length);
    }

    public function processDeposit(Request $request)
    {
        $orderCode = $this->generateRandomOrderCode(8);

        if ($request->payment_method == 'vnpay') {

            $vnpayUrl = $this->vnpay_payment($orderCode, $request->amount['vnpay']);

            return redirect()->to($vnpayUrl['vnp_Url'])->send();

        } elseif ($request->payment_method == 'momo') {

            $momoUrl = $this->momo_payment($orderCode, $request->amount['momo']);

            return redirect()->to($momoUrl['momo_Url'])->send();

        } elseif ($request->payment_method == 'zalopay') {

            $zaloPayUrl = $this->zaloPay_payment($request->amount['zalopay']);

            return redirect()->to($zaloPayUrl['zaloPay_Url'])->send();
        }
    }


    // Vnpay
    public function vnpay_payment($orderCode, $amount)
    {
        $vnp_TmnCode = config('payment.vnpay.vnp_TmnCode');
        $vnp_HashSecret = config('payment.vnpay.vnp_HashSecret');
        $vnp_Url = config('payment.vnpay.vnp_Url');
        $vnp_Returnurl = route('vnpayReturn');

        $vnp_TxnRef = $orderCode;
        $vnp_OrderInfo = "Nạp tiền vào tài khoản thành viên - BKM Cinemas";
        $vnp_OrderType = "billpayment";
        $vnp_Amount = $amount * 100;
        $vnp_Locale = "vn";
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];

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

        ksort($inputData);
        $query = "";
        $hashdata = "";
        $i = 0;

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
            $vnpSecureHash = hash_hmac('sha512', $hashdata, $vnp_HashSecret);
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        return [
            'code' => '00',
            'message' => 'success',
            'vnp_Url' => $vnp_Url
        ];
    }

    public function vnpayReturn(Request $request)
    {
        $vnp_HashSecret = config('payment.vnpay.vnp_HashSecret');
        $inputData = $request->all();
        $vnp_SecureHash = $inputData['vnp_SecureHash'];
        unset($inputData['vnp_SecureHash']);

        ksort($inputData);
        $hashData = "";
        foreach ($inputData as $key => $value) {
            $hashData .= urlencode($key) . "=" . urlencode($value) . '&';
        }
        $hashData = rtrim($hashData, '&');

        $secureHash = hash_hmac('sha512', $hashData, $vnp_HashSecret);

        if ($secureHash === $vnp_SecureHash) {
            $vnp_ResponseCode = $request->get('vnp_ResponseCode');
            DB::beginTransaction();
            try {
                if ($vnp_ResponseCode == '00') {
                    $data = [
                        'vnp_Amount' => $inputData['vnp_Amount'] / 100
                    ];

                    $this->depositService->update($data, Auth::user()->id);

                    DB::commit();

                    return redirect()->route('account')->with([
                        'transaction_succeed' => true,
                        'amount' => $inputData['vnp_Amount'] / 100
                    ]);
                } else {
                    DB::commit();
                    return redirect()->route('account')->with([
                        'transaction_failed' => false
                    ]);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json([
                    'error' => $e->getMessage(),
                    'status' => 'error'
                ], 500);
            }
        } else {
            return response()->json([
                'message' => 'Chữ ký không hợp lệ!',
                'status' => 'error'
            ], 403);
        }
    }
    // End VNPAY

    // Momo
    public function momo_payment($orderCode, $amount)
    {
        $momoConfig = config('payment.momo');
        $partnerCode = $momoConfig['momo_PartnerCode'];
        $accessKey = $momoConfig['momo_AccessKey'];
        $secretKey = $momoConfig['momo_SecretKey'];
        $endpoint = $momoConfig['momo_Url'];
        $notifyUrl = $momoConfig['momo_notify_url'];
        $returnUrl = route('momoReturn');

        $orderInfo = "Nạp tiền vào tài khoản thành viên - BKM Cinemas";
        $requestId = time() . "";
        $requestType = "payWithMoMoATM";
        $extraData = "";

        $rawHash = "partnerCode={$partnerCode}&accessKey={$accessKey}&requestId={$requestId}&bankCode=SML&amount={$amount}&orderId={$orderCode}&orderInfo={$orderInfo}&returnUrl={$returnUrl}&notifyUrl={$notifyUrl}&extraData={$extraData}&requestType={$requestType}";
        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderCode,
            'orderInfo' => $orderInfo,
            'bankCode' => 'SML',
            'returnUrl' => $returnUrl,
            'notifyUrl' => $notifyUrl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
        ];

        $response = Http::timeout(5)->post($endpoint, $data);
        $jsonResult = $response->json();

        return [
            'momo_Url' => $jsonResult['payUrl'] ?? null,
            'error' => $jsonResult['errorCode'] ?? null,
            'message' => $jsonResult['localMessage'] ?? 'Có lỗi xảy ra',
        ];
    }

    public function momoReturn(Request $request)
    {
        $rawHash = "partnerCode={$request->partnerCode}&accessKey={$request->accessKey}&requestId={$request->requestId}&amount={$request->amount}&orderId={$request->orderId}&orderInfo={$request->orderInfo}&orderType={$request->orderType}&transId={$request->transId}&message={$request->message}&localMessage={$request->localMessage}&responseTime={$request->responseTime}&errorCode={$request->errorCode}&payType={$request->payType}&extraData={$request->extraData}";

        $partnerSignature = hash_hmac("sha256", $rawHash, config('payment.momo.momo_SecretKey'));

        if ($partnerSignature == $request->signature) {
            DB::beginTransaction();
            try {
                if ($request->errorCode == '0') {
                    $data = [
                        'zaloPay_Amount' => $request->amount
                    ];

                    $this->depositService->update($data, Auth::user()->id);

                    DB::commit();

                    return redirect()->route('account')->with([
                        'transaction_succeed' => true,
                        'amount' => $request->amount
                    ]);
                } else {
                    DB::commit();
                    
                    return redirect()->route('account')->with([
                        'transaction_failed' => false
                    ]);
                }
            } catch (\Exception $e) {
                DB::rollBack();
                return response()->json([
                    'error' => $e->getMessage(),
                    'status' => 'error'
                ], 500);
            }
        } else {
            return response()->json([
                'message' => 'Lỗi xác thực chữ ký!',
                'status' => 'error'
            ], 400);
        }
    }
    // End Momo

    // Zalo pay
    public function zaloPay_payment($amountTotal)
    {
        $config = config('payment.zalopay');

        $amount = $amountTotal;
        $app_time = round(microtime(true) * 1000);
        $app_trans_id = date("ymd") . "_" . uniqid();
        $app_user = 'demo';
        $bank_code = '';
        $description = "Nạp tiền vào tài khoản - BKM Cinemas";
        $embed_data = json_encode(['redirecturl' => route('zaloPayReturn')]);
        $item = json_encode([["itemid" => "knb", "itemname" => "kim nguyen bao", "itemprice" => 198400, "itemquantity" => 1]]);

        $data = [
            'app_id' => $config['zalopay_AppId'],
            'app_time' => $app_time,
            'app_trans_id' => $app_trans_id,
            'app_user' => $app_user,
            'bank_code' => $bank_code,
            'description' => $description,
            'embed_data' => $embed_data,
            'item' => $item,
            'amount' => $amount,
        ];

        $dataValue = $data['app_id'] . '|' .
            $data['app_trans_id'] . '|' .
            $data['app_user'] . '|' .
            $data['amount'] . '|' .
            $data['app_time'] . '|' .
            $data['embed_data'] . '|' .
            $data['item'];

        $data['mac'] = hash_hmac('sha256', $dataValue, $config['zalopay_Key1']);

        $context = stream_context_create([
            'http' => [
                'header' => "Content-Type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($data),
            ]
        ]);

        $resp = file_get_contents($config['zalopay_Endpoint'], false, $context);
        $result = json_decode($resp, true);

        return [
            'return_code' => $result['return_code'],
            'zaloPay_Url' => $result['order_url'],
        ];
    }

    public function zaloPayReturn(Request $request)
    {
        $return_code = $request->input('return_code');
        $app_trans_id = $request->input('app_trans_id');
        $amount = $request->input('amount');
        $order_info = $request->input('order_info');

        // Kiểm tra mã trả về
        if ($request->status == 1) {
            // Bắt đầu giao dịch
            DB::beginTransaction();
            try {
                dd('Nạp tiền thành công');

                // Commit giao dịch
                DB::commit();

                // Trả về phản hồi thành công
                return response()->json(['message' => 'Đăng ký thành công!'], 200);
            } catch (\Exception $e) {
                // Rollback giao dịch nếu có lỗi
                DB::rollback();

                // Trả về phản hồi lỗi
                return response()->json(['message' => 'Có lỗi xảy ra, vui lòng thử lại sau.'], 500);
            }
        } else {
            dd('Giao dịch đã bị hủy');
            return response()->json(['message' => 'Đăng ký không thành công, mã trả về: ' . $return_code], 400);
        }
    }
    // End Zalo pay
}
