<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\Movies\Interfaces\MovieServiceInterface;
use Illuminate\Http\Request;

class MovieDetailController extends Controller
{
    private $movieService;
    public function __construct(MovieServiceInterface $movieService)
    {
        $this->movieService = $movieService;
    }
    public function movieDetail($slug)
    {
        $post = $this->movieService->findMovieByslug($slug);
        if(is_null($post)){
            return view('error.client.404');
        }
        return view('client.pages.movie-detail', [
            'slug' => $slug
        ]);
    }

}
