<?php

namespace App\Repositories\Client\CategoryPosts\Repository;

use App\Models\Post;
use App\Models\CategoryPost;
use App\Models\PostCategory;
use App\Repositories\Client\CategoryPosts\Interface\CategoryPostInterface;


class CategoryPostRepository implements CategoryPostInterface
{
    const PAGINATION = 9;
    private $categoryPost;
    private $post;
    private $postCategory;

    public function __construct(CategoryPost $categoryPost, Post $post, PostCategory $postCategory)
    {
        $this->categoryPost = $categoryPost;
        $this->post = $post;
        $this->postCategory = $postCategory;
    }

    public function getCategoryPostBySlug($slug)
    {

        $categoryPostsBySlug = $this->categoryPost->where('slug', $slug)->select('id', 'name', 'slug')->first();

        if ($categoryPostsBySlug) {
            $postIds = $this->postCategory
                ->where('category_id', $categoryPostsBySlug->id)
                ->pluck('post_id')
                ->toArray();

            $postByCategory = $this->post->whereIn("id", $postIds)->paginate(self::PAGINATION);
            return $postByCategory;
        }
    }

    public function getCategoryPostFirst($slug)
    {
        $categoryPostsBySlug = $this->categoryPost->where('slug', $slug)->select('id', 'name', 'slug')->first();
        return $categoryPostsBySlug;
    }
}
