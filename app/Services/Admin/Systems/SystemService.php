<?php

namespace App\Services\Admin\Systems;

use App\Repositories\Admin\Systems\Repository\SystemRepository;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class SystemService
{
    use StorageImageTrait;
    protected $systemRepository;

    public function __construct(
        SystemRepository $systemRepository
    )
    {
        $this->systemRepository = $systemRepository;
    }

    public function getAllSystemByType0($request)
    {
        return $this->systemRepository->getAllSystemByType0($request);
    }

    public function getAllSystemBySystemId($request)
    {
        return $this->systemRepository->getAllSystemBySystemId($request);
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'content' => $request->content,
            'order' => $request->order ?? 0,
            'active' => $request->active,
            'type' => $request->type,
        ];

        // Xử lý upload ảnh nếu có
        $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/systems');

        if ($imageUploadData) {
            $data['image'] = $imageUploadData['path'];
        }

        // Tạo mới hệ thống
        $system = $this->systemRepository->createSystem($data);

        return $system;
    }

    public function getSystemById($id)
    {
        return $this->systemRepository->getSystemById($id);
    }

    public function update($request, $id)
    {
        // Tìm bản ghi hệ thống cần cập nhật
        $system = $this->systemRepository->getSystemById($id);

        if (!$system) {
            return redirect()->route('admin.systems.index')->with('status_failed', 'Không tìm thấy nội dung');
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'content' => $request->content,
            'order' => $request->order ?? 0,
            'active' => $request->active,
            'type' => $request->type,
        ];

        if ($request->hasFile('image')) {
            if ($system->image) {
                $path = 'public/systems/' . basename($system->image);
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }

            $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/systems');
            $data['image'] = $imageUploadData['path'];
        }

        // Cập nhật thông tin hệ thống
        $system = $this->systemRepository->updateSystem($data, $id);

        return $system;
    }

    public function delete($id)
    {
        return $this->systemRepository->delete($id);
    }

    public function changeOrder($request)
    {
        $item = $this->systemRepository->getSystemById($request->id);

        $item->update([
            'order' => $request->order
        ]);

        return $item;
    }

    public function changeActive($request)
    {
        $item = $this->systemRepository->getSystemById($request->id);

        $item->update([
            'active' => $item->active == 1 ? 0 : 1
        ]);

        return $item;
    }
}
