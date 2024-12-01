<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Notifications\Interfaces\NotificationServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    private $notificationService;
    public function __construct(
        NotificationServiceInterface $notificationService
    ){
        $this->notificationService = $notificationService;
    }

    public function getByType(Request $request){
        $data = $this->notificationService->getByType($request->type);

        return response()->json([
            'success' => true,
            'message' => 'Thành công!',
            'data' => $data
        ], 200);
    }
}
