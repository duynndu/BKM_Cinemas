<?php

namespace App\Services\Admin\Foods;

use App\Repositories\Admin\Foods\Repository\FoodRepository;
use App\Repositories\Admin\Foods\Repository\FoodTypeRepository;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;


class FoodService
{
    use StorageImageTrait;

    protected $foodRepository;
    public function __construct(
        FoodRepository $foodRepository
    ) {
        $this->foodRepository = $foodRepository;
    }

    public function store($data)
    {
        $uploadData = $this->uploadFile($data['image'], 'public/foods');
        if (isset($data['image']) && $data['image']) {
            $uploadData = $this->uploadFile($data['image'], 'public/foods');
            if (!$uploadData) {
                throw new \Exception("Avatar upload failed");
            }
            $data['image'] = $uploadData['path'];
        }
        $data['price'] = $this->sanitizePrice($data['price']);
        return $this->foodRepository->create($data);
    }

    public function update(&$data, $id)
    {
        $record = $this->find($id);
        if (!$record) {
            return false;
        }

        if (isset($data['image']) && $data['image']) {
            if ($record->image) {
                $this->deleteAvatar($record->image, 'foods');
            }
            $uploadData = $this->uploadFile($data['image'], 'public/foods');
            $data['image'] = $uploadData['path'];
        }
        $data['price'] = $this->sanitizePrice($data['price']);
        return $this->foodRepository->update($id, $data);
    }


    public function delete($id)
    {
        return $this->foodRepository->delete($id);
    }

    public function getAll()
    {
        return $this->foodRepository->getAll();
    }

    public function find($id)
    {
        return $this->foodRepository->find($id);
    }

    public function changeActive($request)
    {
        return $this->foodRepository->changeActive($request->id);
    }

    public function changeOrder($request)
    {
        return $this->foodRepository->changeOrder($request->id, $request->order);
    }


    private function uploadFile($data, $folderName)
    {
        $path = $data->store($folderName);

        return [
            'name' => $data->getClientOriginalName(),
            'path' => Storage::url($path),
        ];
    }

    private function deleteAvatar($avatar, $folderName)
    {
        $path = "public/$folderName/" . basename($avatar);
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }


    private function sanitizePrice($price)
    {
        return str_replace(',', '', $price) ?: null;
    }
}
