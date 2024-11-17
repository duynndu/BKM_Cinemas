<?php

namespace App\Services\Client\ListMovies\Interface;

interface ListMovieServiceInterface
{
    public function movieIsShowing();

    public function  upcomingMovie();
}
