<?php

namespace App\Repositories\Admin\Dashboards\Repositories;

use App\Models\Booking;
use App\Models\Movie;
use App\Models\Post;
use Carbon\Carbon;
use App\Repositories\Admin\Dashboards\Interfaces\DashboardInterface;
use App\Repositories\Base\BaseRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardRepository extends BaseRepository implements DashboardInterface
{
    protected $booking;

    protected $movie;

    public function __construct(
        Booking $booking,
        Movie   $movie
    ) {
        parent::__construct();
        $this->booking = $booking;
        $this->movie = $movie;
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
        $filter = $request->filter;
        $startDate = $request->start_date;
        $endDate = $request->end_date;
        $month = $request->month;
        $year = $request->yearMonth;
        $yearFilter = $request->year_filter;

        $userCinemaId = Auth::user()->cinema_id;
        $requestedCinemaId = $request->cinema_id;

        $query = $this->booking->with('movie')->where('status', 'completed');

        if ($userCinemaId === null) {
            // Admin tổng
            if ($requestedCinemaId) {
                $query->where('cinema_id', $requestedCinemaId);
            }
        } else {
            // Admin rạp/nhân viên
            $query->where('cinema_id', $userCinemaId);
        }

        if ($filter === 'day' && $request->has('date')) {
            $date = Carbon::parse($request->date)->startOfDay();
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

        $bookings = $query->get();

        // Xử lý dữ liệu cho admin tổng nếu không chọn cinema_id
        if ($userCinemaId === null && !$requestedCinemaId) {
            $groupedByMovie = $bookings->groupBy('movie.id')->map(function ($movieBookings) {
                return $movieBookings->sum('total_price');
            });

            $maxRevenueMovieId = $groupedByMovie->keys()->first(function ($id) use ($groupedByMovie) {
                return $groupedByMovie[$id] === $groupedByMovie->max();
            });

            $bookings = $bookings->filter(function ($booking) use ($maxRevenueMovieId) {
                return $booking->movie->id === $maxRevenueMovieId;
            });
        }

        $chartData = $bookings->groupBy(function ($booking) {
            return $booking->movie->title . ' - ' . $booking->created_at->format('d/m/Y');
        })
            ->map(function ($bookings, $movieNameAndDate) {
                return [
                    'movie_name_and_date' => $movieNameAndDate,
                    'total_revenue' => $bookings->sum('total_price'),
                    'movie_count' => $bookings->count(),
                ];
            })
            ->values();

        return $chartData;
    }

    public function getTop5MoviesByViewCount()
    {
        $topMovies = $this->booking->select('movie_id', DB::raw('count(*) as views_count'))
            ->groupBy('movie_id')
            ->orderByDesc('views_count')
            ->limit(5)
            ->get();

        $movies = $this->movie->whereIn('id', $topMovies->pluck('movie_id'))
            ->get();

        return $movies;
    }
}
