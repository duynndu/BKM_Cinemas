<?php

namespace App\Services\Admin\Actors;
use App\Repositories\Admin\Actors\Interface\ActorInterface;

class ActorService
{
    protected $actorRepository;
    public function __construct(
        ActorInterface $actorRepository
    ) {
        $this->actorRepository = $actorRepository;
    }

    public function store($data)
    {
        return $this->actorRepository->create($data);
    }

    public function update($data, $id)
    {
        return $this->actorRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->actorRepository->delete($id);
    }
    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) < 0) {
            return false;
        }
        $this->actorRepository->deleteMultiple($request->selectedIds);
        return true;
    }

    public function getAll()
    {
        return $this->actorRepository->getAll();
    }

    public function find($id)
    {
        return $this->actorRepository->find($id);
    }

 


}
