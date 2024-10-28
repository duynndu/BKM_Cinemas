<?php 
namespace App\Services\Admin\Areas;

use App\Repositories\Admin\Areas\Repository\AreaRepository;
use App\Repositories\Admin\Cities\Repository\CityRepository;

class AreaService
{
    protected $areaRepository;
    protected $cityRepository;

    public function __construct(AreaRepository $areaRepository,CityRepository $cityRepository)
    {
        $this->areaRepository = $areaRepository;
        $this->cityRepository = $cityRepository;
    }

    public function getAllArea()
    {
        return $this->areaRepository->getAll();
    }
    public function getAllCities()
    {
        return $this->cityRepository->getAllCity();
    }


    public function create( $request)
    {
        $data = [
            'name' => $request->name,
            'city_id' => $request->city_id
        ];
        return $this->areaRepository->create($data);
    }

    public function getById($id)
    {
        return $this->areaRepository->find($id);
    }

    public function update($id, $request )
    {
        $data = [
            'name' => $request->name,
            'city_id' => $request->city_id
        ];
        return $this->areaRepository->update($id, $data);
    }

    public function delete($id)
    {
        return $this->areaRepository->delete($id);
    }
}
