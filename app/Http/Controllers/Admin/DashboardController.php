<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Dashboards\DashboardService;


class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(
        DashboardService $dashboardService
    )
    {
        $this->dashboardService = $dashboardService;
    }

    public function dashboard()
    {
       
       
        $data['posts'] = $this->dashboardService->posts();

        $data['top10PostLatest'] = $this->dashboardService->top10PostLatest();

        return view('admin.pages.dashboard', compact('data'));
    }

}
