<?php

namespace App\Repositories\Client\Home\Repository;

use App\Models\Post;
use App\Models\Movie;
use App\Models\MovieGenre;
use App\Models\CategoryPost;
use App\Models\PostCategory;
use App\Repositories\Client\Home\Interface\HomeRepositoryInterface;

class HomeRepository implements HomeRepositoryInterface
{

    protected $movie;
    protected $movieGenre;
    protected $post;
    protected $categoryPost;
    protected $postCategory;


    public function __construct(Movie $movie, MovieGenre $movieGenre, Post $post, CategoryPost $categoryPost, PostCategory $postCategory)
    {
        $this->movie = $movie;
        $this->post = $post;
        $this->categoryPost = $categoryPost;
        $this->postCategory = $postCategory;
        $this->movieGenre = $movieGenre;
    }

    public function sliders()
    {
        return $this->movie->select('slug', 'title', 'banner_movie')
            ->where([['hot', 1], ['active', 1], ['deleted_at', null]])
            ->orderBy('order', 'asc')
            ->paginate(LIMIT_SLIDER);
    }

    public function movieIsShowing()
    {
        return $this->movie->select('id', 'title', 'slug', 'image', 'duration', 'trailer_url', 'format', 'release_date')
            ->where([['release_date', '<=', date('Y-m-d')], ['active', 1], ['deleted_at', null]])
            ->orderBy('order', 'asc')
            ->get();
    }

    public function upcomingMovie()
    {
        return $this->movie->select('id', 'title', 'slug', 'image', 'duration', 'trailer_url', 'format', 'release_date')
            ->where([['release_date', '>', date('Y-m-d')], ['active', 1], ['deleted_at', null]])
            ->orderBy('order', 'asc')->get();
    }

    public function promotionEvent()
    {
        $category = $this->categoryPost->where('id', 1)->where('deleted_at', null)->first();
        if ($category) {
            $ids = $this->postCategory->where('category_id', $category->id)->where('deleted_at', null)->pluck('post_id')->toArray();
            $posts = $this->post->select('name', 'slug', 'avatar', 'description')->whereIn('id', $ids)->get();
            return [
                'category' => $category,
                'posts' => $posts
            ];
        }
    }
}
