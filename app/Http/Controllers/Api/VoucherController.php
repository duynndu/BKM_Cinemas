<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Voucher;
use Carbon\Carbon;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Voucher::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getVoucherByCode(string $code)
    {
        return response()->json(Voucher::where('code', $code)->first());
    }

    public function getUserVouchers()
    {
        $user = auth()->user();
        return response()->json(
            $user->vouchers()->get()
                ->where('start_date', '<=', Carbon::now())
                ->where('end_date', '>=', Carbon::now())
        );
    }
}
