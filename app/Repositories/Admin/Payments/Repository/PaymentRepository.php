<?php

namespace App\Repositories\Admin\Payments\Repository;

use App\Models\Payment;
use App\Repositories\Admin\Payments\Interface\PaymentInterface;

class PaymentRepository implements PaymentInterface
{
    protected $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    // Lấy tất cả các bản ghi Payment
    public function getAllPayments()
    {
        return $this->payment->all();
    }

    
    public function create(array $data)
    {
        return $this->payment->create($data);
    }

 
    public function getById($id)
    {
        return $this->payment->findOrFail($id);
    }

   
    public function update(array $data, $id)
    {
        $payment = $this->payment->findOrFail($id);
        $payment->update($data);
        return $payment;
    }

  
    public function delete($id)
    {
        $payment = $this->payment->findOrFail($id);
        return $payment->delete();
    }
}
