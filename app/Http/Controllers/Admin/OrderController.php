<?php

namespace App\Http\Controllers\Admin;

use App\Events\OrderStatusUpdated;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Services\Admin\Orders\Interfaces\OrderServiceInterface;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private $orderService;
    public function __construct(
        OrderServiceInterface $orderService
    ){
        $this->orderService = $orderService;
    }
    public function index()
    {
        $data = $this->orderService->getAll();
        return view('admin.pages.orders.index', compact('data'));
    }

    public function detail($id)
    {
        $data = $this->orderService->find($id);
        dd($data);
    }

    public function changeStatus(Request $request, $id)
    {
        $validated = $request->validate([
            'status' => ['required', 'in:pending,confirmed,cancelled'],
        ]);

        $record = $this->orderService->find($id);

        if (empty($record)) {
            return response()->json(['failed' => 'Không tìm thấy!'], 404);
        }

        $record->status = $validated['status'];
        $record->save();

        broadcast(new OrderStatusUpdated($record));

        return response()->json(['success' => 'Thành công!'], 200);
    }
}
