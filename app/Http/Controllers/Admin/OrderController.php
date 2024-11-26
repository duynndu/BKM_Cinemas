<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
}
