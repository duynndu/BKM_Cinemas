<?php

namespace App\Services\Client\Posts;


use Stichoza\GoogleTranslate\GoogleTranslate;
use App\Repositories\Client\Posts\Repository\PostRepository;

class PostService
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
