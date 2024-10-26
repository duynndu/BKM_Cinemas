<?php
namespace App\Services\Admin\Cities;

use App\Http\Requests\CityRequests;
use App\Repositories\Admin\Cities\Repository\CityRepository;

class CityService {
    protected $cityRepository;

    public function __construct(CityRepository $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function getAllCities()
    {
        return $this->cityRepository->getAllCities();
    }

    public function findCityById($id)
    {
        return $this->cityRepository->findCityById($id);
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
