<?php

namespace App\Services\Admin\Dashboards\Interfaces;

use App\Services\Base\BaseServiceInterface;

interface DashboardServiceInterface extends BaseServiceInterface
{
    public function posts();

    public function top10PostLatest();

    public function getRevenueAndTicketData($request);

    public function getTop5MoviesByViewCount();
}
