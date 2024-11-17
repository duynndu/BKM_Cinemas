<?php

namespace App\Http\Controllers\Client;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\ListMovies\Interface\ListMovieServiceInterface;

class ListMoviesController extends Controller
{
    protected $listMovieService;

    public function __construct(ListMovieServiceInterface $listMovieService)
    {
        $this->listMovieService = $listMovieService;
    }

    public function movies()
    {
        $movieIsShowing = $this->listMovieService->movieIsShowing();
        $upComingMovie = $this->listMovieService->upcomingMovie();

        // dd($movieIsShowing, $upComingMovie);
        return view('client.pages.movie', [
            'movieIsShowing' => $movieIsShowing,
            'upComingMovie' => $upComingMovie
        ]);
    }
}
