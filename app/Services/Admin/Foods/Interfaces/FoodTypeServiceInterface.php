<?php
namespace App\Services\Admin\Foods\Interfaces;

use App\Services\Base\BaseServiceInterface;

interface FoodTypeServiceInterFace extends BaseServiceInterface
{
    public function getAllActive();
    public function deleteMultipleChecked($request);
    public function changeActive($request);
    public function changeOrder($request);
}
