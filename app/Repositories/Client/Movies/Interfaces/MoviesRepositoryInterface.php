<?php


namespace App\Repositories\Client\Movies\Interfaces;

interface MoviesRepositoryInterface
{
    public function sliders();
    public function movieIsShowing();
    public function upcomingMovie();
}
