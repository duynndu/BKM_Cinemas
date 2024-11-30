<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovieDetailController extends Controller
{
    public function movieDetail($slug)
    {
        $now = Carbon::now();
        $movies = Movie::where('active', 1)
        ->where('release_date', '>=', $now)
        ->limit(4)
        ->get();
        $posts = Post::where('active', '1')
        ->limit(12)
        ->get();
        return view('client.pages.movie-detail', [
            'slug' => $slug,
            'movies' => $movies,
            'posts' => $posts,
        ]);
    }

}
