<?php

namespace App\Repositories\Admin\Menus\Repository;

use App\Models\CategoryPost;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Post;
use App\Repositories\Admin\Menus\Interface\MenuInterface;

class MenuRepository implements MenuInterface
{
    protected $page;

    protected $menu;

    protected $post;

    protected $categoryPost;

    protected $categoryProduct;

    protected $product;

    protected $language;

    protected $languageTransaction;

    public function __construct(
        Page $page,
        Menu $menu,
        Post $post,
        CategoryPost $categoryPost,
    )
    {
        $this->page = $page;
        $this->menu = $menu;
        $this->post = $post;
        $this->categoryPost = $categoryPost;
    }
    public function getAllPage()
    {
        $pages = $this->page->orderBy('id', 'desc')->get();
        return $pages;
    }

    public function getAllMenu()
    {
        $menus = $this->menu->with('childrenRecursive')
            ->where('parent_id', 0)
            ->get();
        return $menus;
    }

    public function getLastChildId()
    {
        $menus = $this->menu->with('childrenRecursive')
            ->get();

        return $menus;
    }

    public function getAllPost()
    {
        $posts = $this->post->orderBy('order')->get();

        return $posts;
    }

    public function getAllCategoryPost()
    {
        $categoryPosts = $this->categoryPost->orderBy('order')->get();

        return $categoryPosts;
    }

    public function getAllLanguage()
    {
        $languages = $this->language->get();
        return $languages;
    }

    public function checkExistMenu($languageId, $key)
    {
        return $this->languageTransaction->where([
            ['language_id', $languageId],
            ['board_id', $key + 1], // Ví dụ $key + 1 là board_id
            ['board_type', 'App\Models\Menu'],
            ['field_name', 'name']
        ])->first();
    }

    public function createMenu($data)
    {
        return $this->menu->create($data);
    }

    public function deleteAllStructureMenu()
    {
        return $this->menu->truncate();
    }

    public function delete()
    {
        $menus = $this->menu->get();

        if (!empty($menus)) {
            foreach ($menus as $menu) {
                $menu->forceDelete();
            }
            return true;
        } else {
            return false;
        }

    }
}
