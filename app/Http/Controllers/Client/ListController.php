<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\CategoryPosts\Interface\CategoryPostServiceInterface;
use Illuminate\Http\Request;

class ListController extends Controller
{
    private $categoryPostService;

    public function __construct(CategoryPostServiceInterface $categoryPostService)
    {
        $this->categoryPostService = $categoryPostService;
    }
    public function index($slug) {
        $categoryPost = $this->categoryPostService->getCategoryPostFirst($slug);
        if(!empty($categoryPost)) {
            $posts = $this->categoryPostService->getCategoryPostBySlug($slug);
            $data = [
                'categoryPost' => $categoryPost,
                'posts' => $posts,
            ];
            return view('client.pages.promotion', $data);
        }
    }
}
