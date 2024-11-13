<?php
namespace App\Services\Admin\Areas\Services;
use App\Repositories\Admin\Areas\Interfaces\AreaInterface;
use App\Services\Admin\Areas\Interfaces\AreaServiceInterface;
use App\Services\Base\BaseService;

class AreaService extends BaseService implements AreaServiceInterface
{
    public function __construct()
    {
        parent::__construct();
    }
    public function getRepository()
    {
        return AreaInterface::class;
    }

}
