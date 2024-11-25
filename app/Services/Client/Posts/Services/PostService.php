<?php


namespace App\Services\Client\Posts\Services;

use App\Repositories\Client\Posts\Repository\PostRepository;
use App\Services\Client\Posts\Interface\PostServiceInterface;

class PostService implements PostServiceInterface
{
    protected $postRepository;

    public function __construct(
        PostRepository $postRepository
    ) {
        $this->postRepository = $postRepository;
    }

    public function getPostFirst($slug)
    {
        return $this->postRepository->getPostFirst($slug);
    }
    public function getPostRelated($slug)
    {
        return $this->postRepository->getPostRelated($slug);
    }
}
