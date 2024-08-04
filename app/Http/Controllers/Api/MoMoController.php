<?php

namespace App\Http\Controllers\Api;

use App\Mail\MyEmail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class MoMoController extends Controller
{
    public function createPayment(Request $request)
    {
        $request->validate([
            'room_id' => 'required',
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'checkin_date' => 'required|date|after:today',
            'checkout_date' => 'required|date|after:checkin_date',
            'payment_method' => 'required|in:momo,paypal,cash',
            'redirect_url' => 'required',
        ]);

        $partnerCode = "MOMO";
        $accessKey = "F8BBA842ECF85";
        $secretKey = "K951B6PE1waDMi640xX08PD3vg6EkVlz";
        $requestId = $partnerCode . time();
        $orderId = $requestId;
        $orderInfo = "pay with MoMo";
        $redirectUrl = $request->redirect_url;
        $ipnUrl = "http://booking-app.test/api/momo/momo-ipn";
        $amount = 100000;
        $requestType = "captureWallet";
        $extraData = ""; // pass empty value if your merchant does not have stores

        $rawSignature = "accessKey=$accessKey&amount=$amount&extraData=$extraData&ipnUrl=$ipnUrl&orderId=$orderId&orderInfo=$orderInfo&partnerCode=$partnerCode&redirectUrl=$redirectUrl&requestId=$requestId&requestType=$requestType";
        $signature = hash_hmac('sha256', $rawSignature, $secretKey);

        $requestBody = [
            'partnerCode' => $partnerCode,
            'accessKey' => $accessKey,
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,
            'lang' => 'en',
        ];

        $response = Http::post('https://test-payment.momo.vn/v2/gateway/api/create', $requestBody);

        if ($response->successful()) {
            return response()->json($response->json());
        } else {
            return response()->json($response->json(), 500);
        }
    }

    public function momoIpn(Request $request)
    {
        $request->validate([
            'orderId' => 'required'
        ]);

//        Mail::to('duynnz1901@gmail.com')->send(new MyEmail($booking));

        return response()->json(['message' => 'Payment received successfully']);
    }
}
