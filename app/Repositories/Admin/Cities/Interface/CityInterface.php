<?php
namespace App\Repositories\Admin\Cities\Interface;

use App\Repositories\Base\RepositoryInterface;

interface CityInterface extends RepositoryInterface {

    public function getAll();

    public function getAllCity();

    public function filterByName($query);

}