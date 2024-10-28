<?php

namespace App\Repositories\Admin\Areas\Repository;

use App\Models\Area;
use App\Repositories\Admin\Areas\Interface\AreaInterface;
use App\Repositories\Base\BaseRepository;

class AreaRepository extends BaseRepository implements AreaInterface
{
    public function getModel()
    {
        return Area::class;
    }

    public function getAll()
    {
        $query = $this->model->newQuery();

        $query = $this->filterByName($query);

        $query = $this->filterByCity($query);

        return $query->paginate(self::PAGINATION);
    }

    public function filterByName($query): mixed
    {
        if (!empty(request()->name)) {
            $query->where('name', 'like', '%' . request()->name . '%');
        }
        return $query; 
    }

    public function filterByCity($query)
    {
        if (!empty(request()->cityId)) {
            
            $query->where('city_id', request()->cityId);
        }
        return $query; 
    }

}
