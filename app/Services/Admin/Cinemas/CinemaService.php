<?php
namespace App\Services\Admin\Cinemas;
use App\Repositories\Admin\Cinemas\Interface\CinemaInterface;
use Illuminate\Support\Facades\Storage;

class CinemaService
{
    protected $cinemaRepository;
    public function __construct(
        CinemaInterface $cinemaRepository
    ) {
        $this->cinemaRepository = $cinemaRepository;
    }

    public function store(&$data)
    {
        if (isset($data['image']) && $data['image']) {
            $uploadData = $this->uploadFile($data['image'], 'public/cinemas');
            $data['image'] = $uploadData['path'];
        }
        return $this->cinemaRepository->create($data);
    }

    public function update(&$data, $id)
    {
        $record = $this->find($id);
        if (!$record) {
            return false;
        }

        if (isset($data['image']) && $data['image']) {
            if ($record->image) {
                $this->deleteAvatar($record->image, 'cinemas');
            }
            $uploadData = $this->uploadFile($data['image'], 'public/cinemas');
            $data['image'] = $uploadData['path'];
        }
        return $this->cinemaRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->cinemaRepository->delete($id);
    }

    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) < 0) {
            return false;
        }
        $this->cinemaRepository->deleteMultiple($request->selectedIds);
        return true;
    }

    public function getAll()
    {
        return $this->cinemaRepository->getAll();
    }

    public function getAllActive()
    {
        return $this->cinemaRepository->getAllActive();
    }

    public function find($id)
    {
        return $this->cinemaRepository->find($id);
    }

    public function changeActive($request)
    {
        return $this->cinemaRepository->changeActive($request->id);
    }

    public function changeOrder($request)
    {
        return $this->cinemaRepository->changeOrder($request->id, $request->order);
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
}
