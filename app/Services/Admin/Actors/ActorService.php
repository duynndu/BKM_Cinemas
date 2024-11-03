<?php

namespace App\Services\Admin\Actors;
use App\Repositories\Admin\Actors\Interface\ActorInterface;
use Illuminate\Support\Facades\Storage;

class ActorService
{
    protected $actorRepository;
    public function __construct(
        ActorInterface $actorRepository
    ) {
        $this->actorRepository = $actorRepository;
    }

    public function store(&$data)
    {
        if (isset($data['image']) && $data['image']) {
            $uploadData = $this->uploadFile($data['image'], 'public/actors');
            $data['image'] = $uploadData['path'];
        }
        return $this->actorRepository->create($data);
    }

    public function update(&$data, $id)
    {
        $record = $this->find($id);
        if (!$record) {
            return false;
        }

        if (isset($data['image']) && $data['image']) {
            if ($record->image) {
                $this->deleteAvatar($record->image, 'actors');
            }
            $uploadData = $this->uploadFile($data['image'], 'public/actors');
            $data['image'] = $uploadData['path'];
        }
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

    private function deleteAvatar($avatar, $folderName)
    {
        $path = "public/$folderName/" . basename($avatar);
        if (Storage::exists($path)) {
            Storage::delete($path);
        }
    }

    private function uploadFile($data, $folderName)
    {
        $path = $data->store($folderName);

        return [
            'name' => $data->getClientOriginalName(),
            'path' => Storage::url($path),
        ];
    }
}
