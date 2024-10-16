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
                // 'comments' => $comments, // Uncomment this line if you want to show comments in the post detail page.
                // 'commentForm' => $commentForm // Uncomment this line if you want to show comment form in the post detail page.
                // 'commentCount' => $commentCount // Uncomment this line if you want to show comment count in the post detail page.

            ];
            return view('client.pages.post-detail', $data);
        } else {
            abort(404);
        }

    }
}
