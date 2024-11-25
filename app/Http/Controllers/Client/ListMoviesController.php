<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\Movies\Interfaces\MovieServiceInterface;

class ListMoviesController extends Controller
{
    protected $movieService;

    public function __construct(MovieServiceInterface $movieService)
    {
        $this->movieService = $movieService;
    }

    public function movies()
    {
        $movieIsShowing = $this->movieService->movieIsShowing();
        $upComingMovie = $this->movieService->upcomingMovie();

        return view('client.pages.movie', [
            'movieIsShowing' => $movieIsShowing,
            'upComingMovie' => $upComingMovie
        ]);
    }
}
