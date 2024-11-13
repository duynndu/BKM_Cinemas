<?php

namespace App\Repositories\Client\Transactions\Repositories;

use App\Models\Transaction;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Client\Transactions\Interfaces\TransactionInterface;

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
}
