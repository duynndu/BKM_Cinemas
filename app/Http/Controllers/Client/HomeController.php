<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\Home\Interfaces\HomeServiceInterface;

class HomeController extends Controller
{

    protected $homeService;

    public function __construct(HomeServiceInterface $homeService)
    {
        $this->homeService = $homeService;
    }

    public function index()
    {
        $sliders = $this->homeService->sliders();

        $movieIsShowing = $this->homeService->movieIsShowing();
        $upComingMovie = $this->homeService->upcomingMovie();
        $promotionEvent = $this->homeService->promotionEvent();

        return view('client.pages.home', [
            'sliders' => $sliders,
            'movieIsShowing' => $movieIsShowing,
            'upComingMovie' => $upComingMovie,
            'promotionEvent' => $promotionEvent,
        ]);
    }
}
