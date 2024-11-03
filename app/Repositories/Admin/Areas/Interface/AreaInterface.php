<?php
namespace App\Repositories\Admin\Areas\Interface;

use App\Repositories\Base\RepositoryInterface;

interface AreaInterface extends RepositoryInterface {
    public function getAll();

    public function filterByName($query);

    public function filterByCity($query);
}
