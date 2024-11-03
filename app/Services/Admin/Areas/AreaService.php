<?php
namespace App\Services\Admin\Areas;
use App\Repositories\Admin\Areas\Interface\AreaInterface;
use App\Repositories\Admin\Cities\Interface\CityInterface;

class AreaService
{
    protected $areaRepository;
    protected $cityRepository;

    public function __construct(
        AreaInterface $areaRepository,
        CityInterface $cityRepository
    )
    {
        $this->areaRepository = $areaRepository;
        $this->cityRepository = $cityRepository;
    }

    public function getAll()
    {
        return $this->areaRepository->getAll();
    }

    public function create( $request)
    {
        $data = [
            'name' => $request->name,
            'city_id' => $request->city_id
        ];
        return $this->areaRepository->create($data);
    }

    public function find($id)
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
