<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Dashboards\Interfaces\DashboardServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(
        DashboardServiceInterface $dashboardService
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

    public function getRevenueAndTicketData(Request $request)
    {
        $data['chart'] = $this->dashboardService->getRevenueAndTicketData($request);

        return response()->json([
            'chart' =>  $data['chart']
        ]);
    }
}
