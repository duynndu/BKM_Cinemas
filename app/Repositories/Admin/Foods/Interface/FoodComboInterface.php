<?php

namespace App\Repositories\Admin\Foods\Interface;

use App\Repositories\Base\RepositoryInterface;

interface FoodComboInterface extends RepositoryInterface
{
    public function deleteMultiple(array $ids);

    public function deleteMultipleItem($record, array $ids);

    public function createManyItem($record, $attributes = []);

    public function updateItem($record, $attributes = []);

    public function changeActive($id);

    public function changeOrder($id, $order);

}