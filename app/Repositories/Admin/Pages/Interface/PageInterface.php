<?php

namespace App\Repositories\Admin\Pages\Interface;

use App\Repositories\Base\RepositoryInterface;

interface PageInterface extends RepositoryInterface
{
    public function countPage();
    public function getAllActive();
}
