<?php

namespace App\Repositories\Client\CategoryPosts\Interface;

interface CategoryPostInterface
{
    public function getCategoryPostBySlug($slug);
    public function getCategoryPostFirst($slug);
}
