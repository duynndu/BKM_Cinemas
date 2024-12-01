<?php

namespace App\Http\Controllers\Admin;

use App\Events\OrderStatusUpdated;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Services\Admin\Orders\Interfaces\OrderServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    private $orderService;
    public function __construct(
        OrderServiceInterface $orderService
    ){
        $this->orderService = $orderService;
    }
    public function index(Request $request)
    {
        $data = $this->orderService->filter($request);
        return view('admin.pages.orders.index', compact('data'));
    }

    public function detail($id)
    {
        $data = $this->orderService->find($id);
        dd($data);
    }

    public function changeGetTickets($id)
    {
        try {
            DB::beginTransaction();
            $data = $this->orderService->changeGetTickets($id);
            DB::commit();
            if (!$data) {
                return response()->json([
                    'success' => false,
                    'message' => 'Có lỗi xảy ra!'
                ], 400);
            }
            return response()->json(['success' => 'Thành công!', 'id' => $id], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());
            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra!',
            ], 500);
        }
    }
}
