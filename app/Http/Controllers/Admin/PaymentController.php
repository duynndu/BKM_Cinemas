<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaymentRequests;
use Illuminate\Http\Request;
use App\Services\Admin\Payments\PaymentService;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    protected $paymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->paymentService = $paymentService;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $payments = $this->paymentService->getAllPayments();
        return view('admin.pages.payment.index', compact('payments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PaymentRequests $request)
    {
        DB::beginTransaction();
        try {
            $this->paymentService->create($request);
            DB::commit();
            return redirect()->route('admin.payments.index')->with('success', 'Payment created successfully.');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.payments.create')->with('success', 'Payment created successfully.');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $payment = $this->paymentService->getById($id);
        return view('admin.payments.show', compact('payment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $payment = $this->paymentService->getById($id);
        return view('admin.payments.edit', compact('payment'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PaymentRequests $request, $id)
    {
        $this->paymentService->updatePayment($request, $id);
        return redirect()->route('admin.payments.index')->with('success', 'Payment updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->paymentService->delete($id);
        return redirect()->route('admin.payments.index')->with('success', 'Payment deleted successfully.');
    }
}
