<?php
namespace App\Services\Admin\Foods;

use App\Repositories\Admin\Foods\Repository\FoodTypeRepository;

class FoodTypeService
{
    protected $foodTypeRepository;
    public function __construct
    (
        FoodTypeRepository $foodTypeRepository
    ){
        $this->foodTypeRepository = $foodTypeRepository;
    }

    public function test()
    {
        return $this->foodTypeRepository->test();
    }
}
