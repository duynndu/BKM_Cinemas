<?php

namespace App\Services\Admin\Dashboards;
use App\Repositories\Admin\Dashboards\Repositories\DashboardRepository;

class DashboardService
{
    protected $dashboardRepository;

    public function __construct(
        DashboardRepository $dashboardRepository
    )
    {
        $this->dashboardRepository = $dashboardRepository;
    }

    public function posts()
    {
        return $this->dashboardRepository->posts();
    }

    public function top10PostLatest()
    {
        return $this->dashboardRepository->top10PostLatest();
    }
}
