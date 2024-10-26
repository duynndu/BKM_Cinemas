<?php

namespace App\Repositories\Admin\Areas\Repository;

use App\Models\Area;
use App\Repositories\Admin\Areas\Interface\AreaInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class AreaRepository implements AreaInterface
{
    protected $area;

    public function __construct(Area $area)
    {
        $this->area = $area;
    }

    
    public function getAllArea()
    {
        return $this->area->all(); 
    }

    
    public function create(array $data)
    {
        return $this->area->create($data);
    }

   
    public function getById($id)
    {
        return $this->area->findOrFail($id);
    }

    
    public function update(array $data, $id)
    {
        $area = $this->getById($id); 
        $area->update($data);
        return $area;
    }

    
    public function delete($id)
    {
        $area = $this->getById($id); 
        return $area->delete();
    }
}
