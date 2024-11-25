<?php

namespace App\Repositories\Admin\Users\Repositories;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Admin\Users\Interfaces\UserInterface;
use App\Repositories\Base\BaseRepository;
use App\Traits\RemoveImageTrait;

class UserRepository extends BaseRepository implements UserInterface
{
    use RemoveImageTrait;

    public function getModel()
    {
        return User::class;
    }

    public function filter($request)
    {
        $data = $this->model->newQuery();
        $data = $data->select('id', 'name', 'first_name', 'last_name', 'email', 'image', 'role_id','status')->with('role');
        if ($request->name) {
            $data = $data->where(function ($query) use ($request) {
                $query->where('name', 'like', '%' . $request->name . '%')
                      ->orWhere('email', 'like', '%' . $request->name . '%');
            });
        }
        $data = $data->paginate(self::PAGINATION);

        return $data->appends([
            'name' => $request->name,
        ]);
    }
}
