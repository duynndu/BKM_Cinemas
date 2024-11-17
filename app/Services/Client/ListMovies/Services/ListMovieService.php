<?php

namespace App\Services\Client\ListMovies\Services;

use App\Services\Client\ListMovies\Interface\ListMovieServiceInterface;
use App\Repositories\Client\ListMovies\Interface\ListMoviesRepositoryInterface;

class ListMovieService implements ListMovieServiceInterface
{
    protected $listMovieRepository;
    public function __construct(ListMoviesRepositoryInterface $listMovieRepository)
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
