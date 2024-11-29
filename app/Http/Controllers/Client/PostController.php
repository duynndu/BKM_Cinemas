<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Services\Client\CategoryPosts\Interface\CategoryPostServiceInterface;
use App\Services\Client\Movies\Interfaces\MovieServiceInterface;
use App\Services\Client\Posts\Interface\PostServiceInterface;
use Illuminate\Http\Request;

class PostController extends Controller
{
    private $categoryPostService;
    private $movieService;
    private $postService;

    public function __construct(
        CategoryPostServiceInterface $categoryPostService,
        MovieServiceInterface $movieService,
        PostServiceInterface $postService

    ){
        $this->categoryPostService = $categoryPostService;
        $this->movieService = $movieService;
        $this->postService = $postService;
    }
    public function list($slug) {
        $categoryPost = $this->categoryPostService->getCategoryPostBySlug($slug);
        if(!empty($categoryPost)) {
            $posts = $categoryPost
                    ->posts()
                    ->where('active', 1)
                    ->orderBy('id', 'desc')
                    ->paginate(PAGINATE_POST);

            $movieIsShowing = $this->movieService->movieIsShowing();

            $data = [
                'categoryPost' => $categoryPost,
                'posts' => $posts,
                'movieIsShowing' => $movieIsShowing,
            ];
            return view('client.pages.post-by-category', $data);
        }else{
            return view('error.client.404');
        }
    }

    public function detail($cateSlug, $slug) {
        $post = $this->postService->getPostFirstByCateSlug($cateSlug, $slug);
        if(is_null($post)){
            return view('error.client.404');
        }
        $postRelated = $this->postService->getPostRelated($cateSlug, $slug);
        $movieIsShowing = $this->movieService->movieIsShowing();

        $data = [
            'post' => $post,
            'postRelated' => $postRelated,
            'movieIsShowing' => $movieIsShowing,
            'cateSlug' => $cateSlug
        ];
        return view('client.pages.post-detail', $data);
    }
}
