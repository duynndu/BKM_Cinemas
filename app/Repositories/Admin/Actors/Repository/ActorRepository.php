<?php

namespace App\Repositories\Admin\Actors\Repository;
use App\Repositories\Admin\Actors\Interface\ActorInterface;
use App\Repositories\Base\BaseRepository;

class ActorRepository extends BaseRepository implements ActorInterface
{
    public function getModel()
    {
        return \App\Models\Actor::class;
    }

    public function getAll()
    {
        $data = $this->model->newQuery();
        $data = $this->filterByName($data);
        $data = $this->applyOrdering($data);
        $data = $this->filterByNationality($data);
        $data = $data->paginate(self::PAGINATION);
        
        return $data->appends([
            'name' => request()->name,
            'order_with' => request()->order_with,
            'nationality' => request()->nationality,
        ]);
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

    protected function applyOrdering($query)
    {
        if (!empty(request()->order_with)) {
            switch (request()->order_with) {
                case 'dateASC':
                    return $query->orderBy('created_at', 'asc');
                case 'dateDESC':
                    return $query->orderBy('created_at', 'desc');
                case 'birthDateASC':
                    return $query->orderBy('birth_date', 'asc');
                case 'birthDateDESC':
                    return $query->orderBy('birth_date', 'desc');
            }
        }
        return $query;
    }

    protected function filterByNationality($query)
    {
        if (!empty(request()->nationality)) {
            return $query->where('nationality', 'like', '%' . request()->nationality . '%');
        }
        return $query;
    }
}
