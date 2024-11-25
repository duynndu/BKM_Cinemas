<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\Abouts\Interfaces\AboutServiceInterface;
use App\Services\Client\Movies\Interfaces\MovieServiceInterface;

class AboutController extends Controller
{
    private $aboutService;
    private $movieService;

    public function __construct(
        AboutServiceInterface $aboutService,
        MovieServiceInterface $movieService
    ){
        $this->aboutService = $aboutService;
        $this->movieService = $movieService;
    }

    public function index()
    {
        $about = $this->aboutService->getSytemBySlug('gioi-thieu');

        if (empty($about) || $about->childs->isEmpty()) return view('error.client.404');

        $abouts = $about->childs->take(3);

        $movieIsShowing = $this->movieService->movieIsShowing();

        return view('client.pages.about', compact( 'abouts', 'movieIsShowing'));
    }
}
