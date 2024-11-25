<?php

namespace App\Services\Client\Home\Interfaces;

interface HomeServiceInterface
{
    public function sliders();

    public function movieIsShowing();

    public function  upcomingMovie();

    public function getCategoryPostBySlug($slug);

}
