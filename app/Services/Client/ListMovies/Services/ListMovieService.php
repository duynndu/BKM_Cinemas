<?php

namespace App\Services\Client\ListMovies\Services;

use App\Services\Client\ListMovies\Interface\ListMovieServiceInterface;
use App\Repositories\Client\ListMovies\Repository\ListMoviesRepository;

class ListMovieService implements ListMovieServiceInterface
{
    protected $listMovieRepository;
    public function __construct(ListMoviesRepository $listMovieRepository)
    {
        $this->listMovieRepository = $listMovieRepository;
    }
    
    public function movieIsShowing()
    {
        return $this->listMovieRepository->movieIsShowing();
    }

    public function upcomingMovie()
    {
        return $this->listMovieRepository->upcomingMovie();
    }
}
