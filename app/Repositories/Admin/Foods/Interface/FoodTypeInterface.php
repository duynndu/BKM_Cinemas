<?php

namespace App\Repositories\Admin\Foods\Interface;

use App\Repositories\Base\RepositoryInterface;

interface FoodTypeInterface extends RepositoryInterface
{
    public function changeActive($id);
    public function changeOrder($id, $order);
}
