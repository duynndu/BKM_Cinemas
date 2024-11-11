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

        $data = $query->paginate(self::PAGINATION);

        return $data->appends([
            'name' => request()->area_name
        ]);
    }

    private function filterByName($query)
    {
        if (!empty(request()->city_name)) {
            return $query->where('name', 'like', '%' . request()->city_name . '%');
        }
        return $query;
    }
}
