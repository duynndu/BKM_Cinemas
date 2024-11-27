<?php

namespace App\Repositories\Admin\Vouchers\Repositories;

use App\Repositories\Admin\Vouchers\Interfaces\VoucherInterface;
use App\Repositories\Base\BaseRepository;

class VoucherRepository extends BaseRepository implements VoucherInterface
{
    public function getModel()
    {
        return \App\Models\Voucher::class;
    }

    public function filter($request)
    {
        $data = $this->model->newQuery();
        $data = $this->filterByNameOrCode($data);
        $data = $this->applyOrdering($data, $request);
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

    protected function filterByNameOrCode($query)
    {
        $searchTerm = request()->name;

        if (!empty($searchTerm)) {
            return $query->where(function ($query) use ($searchTerm) {
                $query->where('name', 'like', '%' . $searchTerm . '%')
                    ->orWhere('code', 'like', '%' . $searchTerm . '%');
            });
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
