<?php
namespace App\Repositories\Admin\Payments\Interface;

interface PaymentInterface {
    public function getAllPayments();
    public function create(array $data);
    public function getById($id);
    public function update(array $data, $id);
    public function delete($id);
}