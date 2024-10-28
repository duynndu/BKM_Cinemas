<?php
namespace App\Services\Admin\Cities;


use App\Repositories\Admin\Cities\Repository\CityRepository;

class CityService {
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function getAllCity()
    {
        return $this->cityRepository->getAllCity();
    }

    public function getAllCities()
    {
        return $this->cityRepository->getAll();
    }

    public function findCityById($id)
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
