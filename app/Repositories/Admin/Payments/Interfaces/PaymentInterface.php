<?php
namespace App\Repositories\Admin\Payments\Interfaces;

use App\Repositories\Base\RepositoryInterface;

interface PaymentInterface extends RepositoryInterface {
    // public function deleteMultiple(array $ids);

    public function getAllActive();

    public function changeActive($id);

}
