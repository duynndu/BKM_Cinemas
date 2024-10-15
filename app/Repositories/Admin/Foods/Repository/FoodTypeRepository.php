<?php
namespace App\Repositories\Admin\Foods\Repository;
use App\Repositories\Admin\Foods\Interface\FoodTypeInterface;
use App\Repositories\Base\BaseRepository;

class FoodTypeRepository extends BaseRepository implements FoodTypeInterface
{
    public function getModel(){
        return \App\Models\FoodType::class;
    }
    public function test(){
        dd(self::PAGINATION);
    }

}
