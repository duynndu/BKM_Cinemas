<?php 
namespace App\Services\Admin\Areas;

use App\Http\Requests\AreaRequests;
use App\Repositories\Admin\Areas\Interface\AreaInterface;
use App\Repositories\Admin\Areas\Repository\AreaRepository;

class AreaService
{
    protected $areaRepository;

    public function __construct(AreaRepository $areaRepository)
    {
        $this->areaRepository = $areaRepository;
    }

    public function getAllArea()
    {
        return $this->areaRepository->getAllArea();
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
        return $this->areaRepository->getById($id);
    }

    public function update($id, $request )
    {
        $data = [
            'name' => $request->name,
            'city_id' => $request->city_id
        ];
        return $this->areaRepository->update($data, $id);
    }

    public function delete($id)
    {
        return $this->areaRepository->delete($id);
    }
}
