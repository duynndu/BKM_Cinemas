<?php
namespace App\Services\Admin\Rewards\Interfaces;

use App\Services\Base\BaseServiceInterface;

interface RewardServiceInterface extends BaseServiceInterface
{
    public function deleteMultipleChecked($request);
    public function filter($request);
}
