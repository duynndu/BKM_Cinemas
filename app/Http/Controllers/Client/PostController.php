<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Client\Posts\Interface\PostServiceInterface;


class PostController extends Controller
{
    private $postService;
    public function __construct(PostServiceInterface $postService)
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

            if (empty($post) && empty($postRelated)) {
                abort(404);
            }

            return view('client.pages.post-detail', $data);
        } else {
            abort(404);
        }
    }
}
