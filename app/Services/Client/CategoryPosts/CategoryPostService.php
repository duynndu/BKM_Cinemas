<?php

namespace App\Services\Client\CategoryPosts;


use App\Repositories\Client\CategoryPosts\Repository\CategoryPostRepository;
use Stichoza\GoogleTranslate\GoogleTranslate;

class CategoryPostService
{

    protected $categoryPostRepository;

    public function __construct(
        CategoryPostRepository $categoryPostRepository
    ) {
        $this->categoryPostRepository = $categoryPostRepository;
    }


    public function getCategoryPostFirst($slug){
        return $this->categoryPostRepository->getCategoryPostFirst($slug);
    }
    public function getCategoryPostBySlug($slug){
        return $this->categoryPostRepository->getCategoryPostBySlug($slug);
    }
}
