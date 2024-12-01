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

        $data['users'] = $this->dashboardService->getAllUsers();

        $data['movies'] = $this->dashboardService->getAllMovies();

        $data['cinemas'] = $this->dashboardService->getAllCinemas();

        $data['totalTicketsInMonth'] = $this->dashboardService->getTotalTicketsInMonth();

        $data['totalTicketsCompleted'] = $this->dashboardService->getTotalTicketsCompleted();

        $data['totalTicketsWaitingForCancellation'] = $this->dashboardService->getTotalTicketsWaitingForCancellation();

        $data['totalTicketsCancelled'] = $this->dashboardService->getTotalTicketsCancelled();

        $data['totalTicketsRejected'] = $this->dashboardService->getTotalTicketsRejected();

        $data['top10PostLatest'] = $this->dashboardService->top10PostLatest();

        $data['cinemas'] = $this->cinemaService->getAllActive();

        $data['top5Movies'] = $this->dashboardService->getTop5MoviesByViewCount();

        $data['top5Cinemas'] = $this->dashboardService->getTop5Cinemas();

        $data['top1Movie'] = $this->dashboardService->getTop1MovieByRevenue();

        return view('admin.pages.dashboard', compact('data'));
    }

    public function getRevenueAndTicketData(Request $request)
    {
        $data['chart'] = $this->dashboardService->getRevenueAndTicketData($request);

        return response()->json([
            'chart'                                 => $data['chart']['chart_data'],
            'topMovies'                             => $data['chart']['top_movies'],
            'cinemaId'                              => $data['chart']['cinema_id'],
            'totalTicketsInMonth'                   => $data['chart']['totalTicketsInMonth'],
            'totalTicketsCompleted'                 => $data['chart']['totalTicketsCompleted'],
            'totalTicketsWaitingForCancellation'    => $data['chart']['totalTicketsWaitingForCancellation'],
            'totalTicketsCancelled'                 => $data['chart']['totalTicketsCancelled'],
            'totalTicketsRejected'                  => $data['chart']['totalTicketsRejected'],
        ]);
    }
}
