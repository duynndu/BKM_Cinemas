<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\CategoryPosts\CategoryPostService;

class CategoryPostController extends Controller
{

    private $categoryPostService;

    public function __construct(CategoryPostService $categoryPostService)
    {
        $this->categoryPostService = $categoryPostService;
    }

    public function categoryPost($slug)
    {
        if ($slug) {
            $categoryPost = $this->categoryPostService->getCategoryPostFirst($slug);
            $posts = $this->categoryPostService->getCategoryPostBySlug($slug);

            $data = [
                'categoryPost' => $categoryPost,
                'posts' => $posts,
            ];
   
            return view('client.pages.promotion', $data);
        } else {
            abort(404);
        }
    }
}