<?php
namespace App\Repositories\Admin\Cities\Interface;

interface CityInterface {
    public function getAllCities();
    public function findCityById($id);
    public function create($data);
    public function update($id, $data);
    public function delete($id);
}