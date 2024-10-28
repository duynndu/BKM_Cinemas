<?php

namespace App\Repositories\Admin\Cities\Repository;

use App\Models\City;
use App\Repositories\Admin\Cities\Interface\CityInterface;
use App\Repositories\Base\BaseRepository;

class CityRepository extends BaseRepository implements CityInterface
{
    public function getModel()
    {
        return City::class;
    }

    public function getAll()
    {
        $query = $this->model->newQuery();
        
        $query = $this->filterByName($query);

        return $query->paginate(self::PAGINATION);
    }
    public function getAllCity()
    {
        return $this->getModel()::all();
        
    }
    public function filterByName($query)
    {
        if (!empty(request()->name)) {
            return $query->where('name', 'like', '%' . request()->name . '%');
        }
        return $query;
    }
}
