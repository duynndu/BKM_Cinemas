<?php

namespace App\Services\Admin\Foods;

use App\Repositories\Admin\Foods\Repository\FoodComboRepository;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;


class FoodComboService
{
    use StorageImageTrait;

    protected $foodComboRepository;

    public function __construct(
        FoodComboRepository $foodComboRepository
    ) {
        $this->foodComboRepository = $foodComboRepository;
    }

    public function store(&$data)
    {
        $uploadData = $this->uploadFile($data['food_combo']['image'], 'public/foodCombos');
        if (isset($data['food_combo']['image']) && $data['food_combo']['image']) {
            $uploadData = $this->uploadFile($data['food_combo']['image'], 'public/foodCombos');
            $data['food_combo']['image'] = $uploadData['path'];
        }
        $data['food_combo']['price'] = $this->sanitizePrice($data['food_combo']['price']);
        return $this->foodComboRepository->create($data);
    }


    public function update(&$data, $id)
    {
        $record = $this->find($id);
        if (!$record) {
            return false;
        }

        if (isset($data['food_combo']['image']) && $data['food_combo']['image']) {
            if ($record->image) {
                $this->deleteAvatar($record->image, 'foodCombos');
            }
            $uploadData = $this->uploadFile($data['food_combo']['image'], 'public/foodCombos');
            $data['food_combo']['image'] = $uploadData['path'];
        }
        $data['food_combo']['price'] = $this->sanitizePrice($data['food_combo']['price']);
        if (!empty($data['item'])) {
            $this->foodComboRepository->createManyItem($record, $data['item']);
        }
        if (!empty($data['old_item'])) {
            $existingIds = $record->items->pluck('id')->toArray();

            $newIds = array_column($data['old_item'], 'id');

            $idsToDelete = array_diff($existingIds, $newIds);

            if (!empty($idsToDelete)) {
                $this->foodComboRepository->deleteMultipleItem($record, $idsToDelete);
            }

            $this->foodComboRepository->updateItem($record, $data['old_item']);
        }
        return $this->foodComboRepository->update($id, $data['food_combo']);
    }


    public function delete($id)
    {
        return $this->foodComboRepository->delete($id);
    }

    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) < 0) {
            return false;
        }
        $this->foodComboRepository->deleteMultiple($request->selectedIds);
        return true;
    }

    public function getAll()
    {
        return $this->foodComboRepository->getAll();
    }

    public function find($id)
    {
        return $this->foodComboRepository->find($id);
    }

    public function changeActive($request)
    {
        return $this->foodComboRepository->changeActive($request->id);
    }

    public function changeOrder($request)
    {
        return $this->foodComboRepository->changeOrder($request->id, $request->order);
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
