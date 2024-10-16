<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\Posts\PostService;

class PostController extends Controller
{
    private $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }
    public function postDetail($slug)
    {
        if ($slug) {
            $post = $this->postService->getPostFirst($slug);
            $postRelated = $this->postService->getPostRelated($slug);

            $data = [
                'post' => $post,
                'postRelated' => $postRelated
               
            ];
            return view('client.pages.post-detail', $data);
        } else {
            abort(404);
        }

    }
}
