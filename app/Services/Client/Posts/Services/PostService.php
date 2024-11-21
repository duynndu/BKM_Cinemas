<?php


namespace App\Services\Client\Posts\Services;

use App\Repositories\Client\Home\Repository\HomeRepository;
use App\Repositories\Client\Posts\Repository\PostRepository;
use App\Services\Client\Posts\Interface\PostServiceInterface;

class PostService implements PostServiceInterface
{
    protected $postRepository;
    protected $homeRepository;

    public function __construct(
        PostRepository $postRepository,
        HomeRepository $homeRepository
    ) {
        $this->postRepository = $postRepository;
        $this->homeRepository = $homeRepository;
    }

    public function getPostFirst($slug)
    {
        return $this->postRepository->getPostFirst($slug);
    }
    public function getPostRelated($slug)
    {
        return $this->postRepository->getPostRelated($slug);
    }

    public function movieIsShowing() {
        return $this->homeRepository->movieIsShowing();
    }
}
