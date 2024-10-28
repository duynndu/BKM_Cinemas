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
        $data = $this->model->newQuery();

        $data = $this->filterByName($data);

        $data = $this->filterByStatus($data);

        $data = $this->applyOrdering($data);

        return $data->paginate(self::PAGINATION);
    }

    public function deleteMultiple(array $ids)
    {
        collect($ids)->chunk(1000)->each(function ($chunk) {
            $this->model->whereIn('id', $chunk)->delete();
        });
        return true;
    }

    protected function filterByName($query)
    {
        if (!empty(request()->name)) {
            return $query->where('name', 'like', '%' . request()->name . '%');
        }
        return $query;
    }

    protected function filterByStatus($query)
    {
        if (!empty(request()->fill_action)) {
            switch (request()->fill_action) {
                case 'active':
                    return $query->where('active', 1);
                case 'noActive':
                    return $query->where('active', 0);
            }
        }
        return $query;
    }

    protected function applyOrdering($query)
    {
        if (!empty(request()->order_with)) {
            switch (request()->order_with) {
                case 'dateASC':
                    return $query->orderBy('created_at', 'asc');
                case 'dateDESC':
                    return $query->orderBy('created_at', 'desc');
                case 'priceASC':
                    return $query->orderBy('price', 'asc');
                case 'priceDESC':
                    return $query->orderBy('price', 'desc');
            }
        }
        return $query->orderBy('order');
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
