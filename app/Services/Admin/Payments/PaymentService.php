<?php

namespace App\Services\Admin\Payments;

use App\Http\Requests\PaymentRequests;
use App\Repositories\Admin\Payments\Repository\PaymentRepository;
use Illuminate\Support\Facades\Storage;

class PaymentService {
    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function getAllPayments()
    {
        return $this->paymentRepository->getAllPayments();
    }

    public function create( $request)
    {
        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'active' => $request->input('active', 1) 
        ];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('payments', 'public');
            $data['image'] = $imagePath; 
        }

        return $this->paymentRepository->create($data);
    }

    public function getById($id)
    {
        return $this->paymentRepository->getById($id);
    }

    public function updatePayment($id,  $request)
    {
        $payment = $this->getById($id);

        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'active' => $request->input('active', 1)
        ];

        if ($request->hasFile('image')) {
            if ($payment->image) {
                Storage::disk('public')->delete($payment->image);
            }
            $imagePath = $request->file('image')->store('payments', 'public');
            $data['image'] = $imagePath;
        }

        return $this->paymentRepository->update($data, $id);
    }

    public function delete($id)
    {
        $payment = $this->getById($id);

        if ($payment->image) {
            Storage::disk('public')->delete($payment->image);
        }

        return $this->paymentRepository->delete($id);
    }
}
