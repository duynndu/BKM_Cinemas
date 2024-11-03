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

        $data = $query->paginate(self::PAGINATION);

        return $data->appends([
            'name' => request()->area_name,
            'city_id' => request()->cityId
        ]);
    }

    protected function filterByName($query)
    {
        if (!empty(request()->area_name)) {
            $query->where('name', 'like', '%' . request()->area_name . '%');
        }
        return $query; 
    }

    protected function filterByCity($query)
    {
        if (!empty(request()->cityId)) {
            $query->where('city_id', request()->cityId);
        }
        return $query; 
    }

}
