<?php

namespace App\Repositories\Admin\Users\Repository;

use App\Models\Role;
use App\Models\User;
use App\Repositories\Admin\Users\Interface\UserInterface;
use App\Traits\RemoveImageTrait;

class UserRepository implements UserInterface
{
    use RemoveImageTrait;

    const PAGINATION = 12;

    protected $user;

    protected $role;

    protected $language;

    public function __construct(
        User    $user,
        Role    $role,
    )
    {
        $this->user = $user;
        $this->role = $role;
    }

    public function getAllUser()
    {
        return $this->user->select('id', 'name', 'first_name', 'last_name', 'email', 'image', 'role_id','status')
            ->with(['role'])
            ->paginate(self::PAGINATION);
    }

    public function getAllRole()
    {
        return $this->role->select('id', 'name', 'type')->get();
    }


    public function create($request)
    {
        return $this->user->create($request);
    }

    public function getUserById($id)
    {
        return $this->user->find($id);
    }

    public function update($data, $id)
    {
        $user = $this->user->find($id);

        $user->update($data);

        return $user;
    }

    public function delete($id)
    {
        $user = $this->user->find($id);

        if(!$user) {
            return redirect()->route('admin.users.index')->with('status_failed', 'Không tìm thấy người dùng');
        }

        $this->existImage($user, 'image', 'users');

        $user->delete($id);

        return true;
    }
}
