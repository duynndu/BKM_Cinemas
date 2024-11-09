<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Services\Client\ListMovies\Interfaces\ListMovieInterface;

class ListMovieController extends Controller
{
    protected $listMovieServiceInterface;

    public function __construct(ListMovieInterface $listMovieServiceInterface) {
        $this->listMovieServiceInterface = $listMovieServiceInterface;
    }

    public function listMovie()
    {
        echo "123";

        // $movies = $this->listMovieServiceInterface->listMovie();
        // dd($movies);
        
        // return view('client.pages.movie');
    }
}

