<?php

namespace App\Repositories\Admin\Foods\Repository;

use App\Repositories\Admin\Foods\Interface\FoodTypeInterface;
use App\Repositories\Base\BaseRepository;

class FoodRepository extends BaseRepository implements FoodTypeInterface
{
    public function getModel()
    {
        return \App\Models\Food::class;
    }
    public function getAll()
    {
        return $this->model->with(['type' => function ($query) {
            $query->select('id', 'name')->where('active', 1);
        }])->paginate(self::PAGINATION);
    }

   


    public function changeActive($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->active ^= 1;
            $result->save();
            return $result;
        }
        return false;
    }

    public function changeOrder($id, $order)
    {
        $result = $this->find($id);
        if ($result) {
            $result->order = $order;
            $result->save();
            return $result;
        }
        return false;
    }
}