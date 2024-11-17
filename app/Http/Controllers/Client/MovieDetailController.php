<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MovieDetailController extends Controller
{
    public function movieDetail($slug)
    {
        return view('client.pages.movie-detail', [
            'slug' => $slug
        ]);
    }
}
