<?php
namespace App\Repositories\Admin\Areas\Interface;

interface AreaInterface {
    public function getAllArea();
    public function create(array $data);
    public function getById($id);
    public function update(array $data, $id);
    public function delete($id);
}