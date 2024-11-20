<?php

namespace App\Services\Client\Home\Services;

use App\Repositories\Client\Home\Interface\HomeRepositoryInterface;
use App\Services\Client\Home\Interfaces\HomeServiceInterface;


class HomeService  implements HomeServiceInterface
{
    protected $homeRepository;

    public function __construct(HomeRepositoryInterface $homeRepository)
    {
        $this->homeRepository = $homeRepository;
    }

    public function sliders()
    {
        return $this->homeRepository->sliders();
    }

    public function movieIsShowing()
    {
        return $this->homeRepository->movieIsShowing();
    }

    public function upcomingMovie()
    {
        return $this->homeRepository->upcomingMovie();
    }
    public function promotionEvent()
    {
        return $this->homeRepository->promotionEvent();
    }


}
