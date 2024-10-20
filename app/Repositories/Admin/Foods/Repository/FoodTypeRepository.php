<?php

namespace App\Repositories\Admin\Foods\Repository;

use App\Repositories\Admin\Foods\Interface\FoodTypeInterface;
use App\Repositories\Base\BaseRepository;

class FoodTypeRepository extends BaseRepository implements FoodTypeInterface
{
    public function getModel()
    {
        return \App\Models\FoodType::class;
    }
    public function getAll()
    {
        return $this->model->select('id', 'name', 'order', 'active')->paginate(self::PAGINATION);
    }

    public function getAllActive()
    {
        return $this->model->select('id', 'name', 'order')->where('active', 1)->get();
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
