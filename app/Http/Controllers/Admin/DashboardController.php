<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Cinemas\Interfaces\CinemaServiceInterface;
use App\Services\Admin\Dashboards\Interfaces\DashboardServiceInterface;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    protected $dashboardService;

    protected $cinemaService;

    public function __construct(
        DashboardServiceInterface $dashboardService,
        CinemaServiceInterface    $cinemaService
    )
    {
        $this->dashboardService = $dashboardService;
        $this->cinemaService = $cinemaService;
    }

    public function dashboard()
    {
        $data['posts'] = $this->dashboardService->posts();

        $data['top10PostLatest'] = $this->dashboardService->top10PostLatest();

        $data['cinemas'] = $this->cinemaService->getAllActive();

        $data['top5Movies'] = $this->dashboardService->getTop5MoviesByViewCount();

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
