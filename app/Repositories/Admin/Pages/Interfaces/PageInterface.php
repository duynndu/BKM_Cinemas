<?php

namespace App\Repositories\Admin\Pages\Interfaces;

use App\Repositories\Base\RepositoryInterface;

interface PageInterface extends RepositoryInterface
{
    public function countPage();
    public function getAllActive();
}
