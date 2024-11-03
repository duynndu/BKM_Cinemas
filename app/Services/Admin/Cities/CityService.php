<?php
namespace App\Services\Admin\Cities;
use App\Repositories\Admin\Cities\Interface\CityInterface;

class CityService {
    protected $cityRepository;

    public function __construct(
        CityInterface $cityRepository 
    )
    {
        $this->cityRepository = $cityRepository;
    }

    public function getAll()
    {
        return $this->cityRepository->getAll();
    }


    public function find($id)
    {
        return $this->cityRepository->find($id);
    }

    public function create( $request)
    {
        $data = [
            'name' => $request->name,
        ];
        return $this->cityRepository->create($data);
    }

    public function update($id, $request)
    {
        $data = [
            'name' => $request->name,
        ];
        return $this->cityRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->cityRepository->delete($id);
    }
}
