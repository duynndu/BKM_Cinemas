<?php

namespace App\Services\Admin\Vouchers\Services;

use App\Repositories\Admin\Vouchers\Interfaces\VoucherInterface;
use App\Services\Admin\Vouchers\Interfaces\VoucherServiceInterface;
use App\Services\Base\BaseService;
use Illuminate\Support\Facades\Storage;

class VoucherService extends BaseService implements VoucherServiceInterface
{

    public function __construct()
    {
        parent::__construct();
    }
    public function getRepository()
    {
        return VoucherInterface::class;
    }
    public function filter($request)
    {
        return $this->repository->filter($request);
    }

    public function create(&$data)
    {
        if (isset($data['image']) && $data['image']) {
            $uploadData = $this->uploadFile($data['image'], 'public/actors');
            $data['image'] = $uploadData['path'];
        }
        return $this->repository->create($data);
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
        return $this->repository->update($id, $data);
    }

    public function deleteMultipleChecked($request)
    {

        if (count($request->selectedIds) < 0) {
            return false;
        }
        $this->repository->deleteMultiple($request->selectedIds);
        return true;
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
