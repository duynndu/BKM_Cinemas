<?php

namespace App\Repositories\Admin\Dashboards\Repositories;

use App\Models\Booking;
use App\Models\Post;
use Carbon\Carbon;
use App\Repositories\Admin\Dashboards\Interfaces\DashboardInterface;
use App\Repositories\Base\BaseRepository;

class DashboardRepository extends BaseRepository implements DashboardInterface
{
    protected $Booking;

    public function __construct(
        Booking $Booking
    ) {
        parent::__construct();
        $this->Booking = $Booking;
    }

    public function getModel()
    {
        return Post::class;
    }

    public function posts()
    {
        return $this->model->get();
    }

    public function top10PostLatest()
    {
        return $this->model->orderBy('id', 'desc')->take(10)->get();
    }

    public function getRevenueAndTicketData($request)
    {
        $filter = $request->input('filter');
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $month = $request->input('month');
        $year = $request->input('yearMonth');
        $yearFilter = $request->input('year_filter');

        $query = $this->Booking->with('movie')
            ->where('status', 'completed');

        if ($filter === 'day' && $request->has('date')) {
            $date = Carbon::parse($request->input('date'))->startOfDay();
            $query->whereDate('created_at', $date);
        }

        if ($filter === 'month' && $month && $year) {
            $query->whereMonth('created_at', $month)
                ->whereYear('created_at', $year);
        }

        if ($filter === 'year' && $yearFilter) {
            $query->whereYear('created_at', $yearFilter);
        }

        if ($filter === 'range' && $startDate && $endDate) {
            $startDate = Carbon::parse($startDate)->startOfDay();
            $endDate = Carbon::parse($endDate)->endOfDay();
            $query->whereBetween('created_at', [$startDate, $endDate]);
        }

        $chartData = $query->get();

        $chartData = $chartData->groupBy(function ($booking) {
            return $booking->movie->title . ' - ' . $booking->created_at->format('d/m/Y');
        })
            ->map(function ($bookings, $movieNameAndDate) {
                return [
                    'movie_name_and_date' => $movieNameAndDate,
                    'total_revenue' => $bookings->sum('total_price')
                ];
            })
            ->values();

        return $chartData;
    }
}
