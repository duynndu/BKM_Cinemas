<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\Posts\Interface\PostServiceInterface;
use App\Services\Client\CategoryPosts\Interface\CategoryPostServiceInterface;

class CategoryPostController extends Controller
{
    private $categoryPostService;
    private $postService;

    public function __construct(CategoryPostServiceInterface $categoryPostService, PostServiceInterface $postService)
    {
        $this->categoryPostService = $categoryPostService;
        $this->postService = $postService;
    }

    public function categoryPost($slug)
    {
        if ($slug) {
            $categoryPost = $this->categoryPostService->getCategoryPostFirst($slug);
            $posts = $this->categoryPostService->getCategoryPostBySlug($slug);
            $movieIsShowing = $this->postService->movieIsShowing();

            $data = [
                'categoryPost' => $categoryPost,
                'posts' => $posts,
                'movieIsShowing' => $movieIsShowing
            ];

            if(empty($posts && $categoryPost)) {
                abort(404);
            }
   
            return view('client.pages.promotion', $data);
        } else {
            abort(404);
        }
    }
}
