<?php

namespace App\Services\Client\Deposits\Services;

use App\Repositories\Client\Deposits\Interfaces\DepositInterface;
use App\Services\Base\BaseService;
use App\Services\Client\Deposits\Interfaces\DepositServiceInterface;

class DepositService extends BaseService implements DepositServiceInterface
{
    public function getRepository()
    {
        return DepositInterface::class;
    }

    public function update(&$data, $id)
    {
        $record = $this->find($id);
        if (!$record) {
            return false;
        }

        if (isset($data['vnp_Amount'])) {
            $dataNew['balance'] = $data['vnp_Amount'] + $record->balance;
        }

        if (isset($data['momo_Amount'])) {
            $dataNew['balance'] = $data['momo_Amount'] + $record->balance;
        }

        if (isset($data['zaloPay_Amount'])) {
            $dataNew['balance'] = $data['zaloPay_Amount'] + $record->balance;
        }

        return $this->repository->update($id, $dataNew);
    }
}