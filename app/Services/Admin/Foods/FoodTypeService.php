<?php

namespace App\Services\Admin\Foods;

use App\Repositories\Admin\Foods\Repository\FoodTypeRepository;

class FoodTypeService
{
    protected $foodTypeRepository;
    public function __construct(
        FoodTypeRepository $foodTypeRepository
    ) {
        $this->foodTypeRepository = $foodTypeRepository;
    }

    public function store($data)
    {
        return $this->foodTypeRepository->create($data);
    }

    public function update($data, $id)
    {
        return $this->foodTypeRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->foodTypeRepository->delete($id);
    }
    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) < 0) {
            return false;
        }
        $this->foodTypeRepository->deleteMultiple($request->selectedIds);
        return true;
    }

    public function getAll()
    {
        return $this->foodTypeRepository->getAll();
    }

    public function getAllActive()
    {
        return $this->foodTypeRepository->getAllActive();
    }

    public function find($id)
    {
        return $this->foodTypeRepository->find($id);
    }

    public function changeActive($request)
    {
        return $this->foodTypeRepository->changeActive($request->id);
    }

    public function changeOrder($request)
    {
        return $this->foodTypeRepository->changeOrder($request->id, $request->order);
    }
}
