<?php

namespace App\Services\Admin\Dashboards\Services;

use App\Repositories\Admin\Dashboards\Interfaces\DashboardInterface;
use App\Repositories\Admin\Dashboards\Repositories\DashboardRepository;
use App\Services\Admin\Dashboards\Interfaces\DashboardServiceInterface;
use App\Services\Base\BaseService;

class DashboardService extends BaseService implements DashboardServiceInterface
{
    public function getRepository()
    {
        return DashboardInterface::class;
    }

    public function posts()
    {
        return $this->repository->posts();
    }

    public function top10PostLatest()
    {
        return $this->repository->top10PostLatest();
    }

    public function getRevenueAndTicketData($request)
    {
        return $this->repository->getRevenueAndTicketData($request);
    }
}
