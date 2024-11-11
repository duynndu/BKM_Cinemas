<?php

namespace App\Repositories\Admin\Users\Repository;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Admin\Users\Interface\UserInterface;
use App\Repositories\Base\BaseRepository;
use App\Traits\RemoveImageTrait;

class UserRepository extends BaseRepository implements UserInterface
{
    use RemoveImageTrait;

    public function getModel()
    {
        return User::class;
    }

    public function getAll()
    {
        return $this->model->select('id', 'name', 'first_name', 'last_name', 'email', 'image', 'role_id','status')
            ->with(['role'])
            ->paginate(self::PAGINATION);
    }
}
