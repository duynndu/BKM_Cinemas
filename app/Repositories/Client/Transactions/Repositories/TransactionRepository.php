<?php

namespace App\Repositories\Client\Transactions\Repositories;

use App\Models\Transaction;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Client\Transactions\Interfaces\TransactionInterface;
use Illuminate\Support\Facades\Auth;

class TransactionRepository extends BaseRepository implements TransactionInterface
{
    public function getModel()
    {
        return Transaction::class;
    }

    public function getTransactionByUser($userId)
    {
        return $this->model->where('user_id', $userId)->orderBy('id', 'DESC')->get();
    }
 

    public function getTotalMoneyByYear($request)
    {
        $year = $request->year;

        // Tính tổng chi tiêu của năm được chọn
        $totalMoney = $this->model
            ->where('type', 'booking')
            ->where('status', 'completed')
            ->whereYear('created_at', $year)
            ->where('user_id', Auth::user()->id)
            ->sum('amount');

        return response()->json([
            'totalMoney' => $totalMoney,
            'totalMoneyFormatted' => number_format($totalMoney, 0, ',', '.')
        ], 200);
    }
    public function getTotalMoneyByMonth($request)
    {
        $month = $request->month; // Ví dụ: "12/2024"
    
        // Tách tháng và năm từ chuỗi "12/2024"
        [$selectedMonth, $selectedYear] = explode('/', $month);
    
        // Tính tổng chi tiêu của tháng và năm được chọn
        $totalMoney = $this->model
            ->where('type', 'booking')
            ->where('status', 'completed')
            ->whereYear('created_at', $selectedYear) // Lọc theo năm
            ->whereMonth('created_at', $selectedMonth) // Lọc theo tháng
            ->where('user_id', Auth::user()->id)
            ->sum('amount');
    
        return response()->json([
            'totalMoney' => $totalMoney,
            'totalMoneyFormatted' => number_format($totalMoney, 0, ',', '.')
        ], 200);
    }
    
}
