<?php

namespace App\Services\Client\CategoryPosts\Interface;

interface CategoryPostServiceInterface{
    public function getCategoryPostFirst($slug);
    public function getCategoryPostBySlug($slug);
}