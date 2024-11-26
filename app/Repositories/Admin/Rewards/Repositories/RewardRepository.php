<?php

namespace App\Repositories\Admin\Rewards\Repositories;
use App\Repositories\Admin\Rewards\Interfaces\RewardInterface;
use App\Repositories\Base\BaseRepository;

class RewardRepository extends BaseRepository implements RewardInterface
{
    public function getModel()
    {
        return \App\Models\Reward::class;
    }

    public function filter($request)
    {
        $data = $this->model->newQuery();
        $data = $this->filterByName( $data);
        $data = $this->applyOrdering( $data,$request);
        $data = $data->paginate(self::PAGINATION);

        return $data->appends([
            'name' => $request->name,
            'order_with' => $request->order_with,
        ]);
    }



    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();
            return true;
        }

        return false;
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

    protected function applyOrdering($query, $request)
    {
        if (!empty($request->order_with)) {
            switch ($request->order_with) {
                case 'dateASC':
                    return $query->orderBy('created_at', 'asc');
                case 'dateDESC':
                    return $query->orderBy('created_at', 'desc');
            }
        }
        return $query;
    }

}
