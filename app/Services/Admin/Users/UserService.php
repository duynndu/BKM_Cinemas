<?php

namespace App\Services\Admin\Users;

use App\Repositories\Admin\Users\Repository\UserRepository;
use App\Traits\RemoveImageTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Hash;

class UserService
{
    use StorageImageTrait, RemoveImageTrait;

    protected $userRepository;

    public function __construct(
        UserRepository $userRepository
    )
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUser()
    {
        return $this->userRepository->getAllUser();
    }

    public function getAllRole()
    {
        return $this->userRepository->getAllRole();
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id ?? null,
            'type' => $request->type,
        ];

        // Xử lý upload ảnh nếu có
        $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/users');

        if ($imageUploadData) {
            $data['image'] = $imageUploadData['path'];
        }

        $this->userRepository->create($data);

        return true;
    }

    public function getUserById($id)
    {
        return $this->userRepository->getUserById($id);
    }

    public function update($request, $id)
    {
        $user = $this->userRepository->getUserById($id);

        if (!$user) {
            return redirect()->route('admin.users.index')->with('status_failed', 'Không tìm thấy người dùng');
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'password' => $request->new_password ? Hash::make($request->new_password) : $user->password,
            'role_id' => $request->role_id ?? null,
            'type' => $request->type,
        ];

        if($request->hasFile('image')) {
            $this->existImage($user, 'image', 'users');

            $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/users');

            $data['image'] = $imageUploadData['path'];
        }

        $this->userRepository->update($data, $id);

        return true;
    }

    public function delete($id)
    {
        return $this->userRepository->delete($id);
    }

    public function changeStatus($request)
    {
        $user = $this->userRepository->getUserById($request->id);

        if (!$user) {
            return redirect()->route('admin.users.index')->with('status_failed', 'Không tìm thấy người dùng');
        }

        $user->update([
            'status' => $user->status == 1 ? 0 : 1
        ]);

        return $user;
    }
}
