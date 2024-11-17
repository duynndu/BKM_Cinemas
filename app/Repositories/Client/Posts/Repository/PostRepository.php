<?php

namespace App\Repositories\Client\Posts\Repository;

use App\Models\Post;
use App\Models\CategoryPost;
use App\Models\PostCategory;
use App\Repositories\Client\Posts\Interface\PostInterface;

class PostRepository implements PostInterface
{

    const PAGINATION = 10;
    const LIMIT = 8;

    private $categoryPost;
    private $post;
    private $postCategory;

    public function __construct(CategoryPost $categoryPost, Post $post, PostCategory $postCategory)
    {
        $this->categoryPost = $categoryPost;
        $this->post = $post;
        $this->postCategory = $postCategory;
    }

    public function getPostFirst($slug)
    {
        $post = $this->post->where('slug', $slug)->select("name", "slug", "description", "content", "avatar", "created_at")->first();
        return $post;
    }
    public function getPostRelated($slug)
    {
        $post = $this->post->where('slug', $slug)->select("id")->first();
        if ($post) {

            $categoryId = $this->postCategory
                ->where('post_id', $post->id)->select('category_id')
                ->first();

            $postIds = $this->postCategory
                ->where('category_id', $categoryId->category_id)
                ->where('post_id', '<>', $post->id)
                ->pluck('post_id')
                ->toArray();

            $postRelated = $this->post->whereIn('id', $postIds)->select("name", "slug", "description", "content", "avatar", "created_at")->limit(self::LIMIT)->get();
            return $postRelated;
        }else{
            return null;
        }
    }
}
