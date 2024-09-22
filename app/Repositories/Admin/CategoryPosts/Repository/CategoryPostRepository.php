<?php

namespace App\Repositories\Admin\CategoryPosts\Repository;

use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\PostCategory;
use App\Repositories\Admin\CategoryPosts\Interface\CategoryPostInterface;

class CategoryPostRepository implements CategoryPostInterface
{
    const PAGINATION = 10;

    protected $categoryPost;

    protected $postCategory;

    protected $post;

    public function __construct(
        CategoryPost $categoryPost,
        PostCategory $postCategory,
        Post $post,

    ) {
        $this->categoryPost = $categoryPost;
        $this->postCategory = $postCategory;
        $this->post = $post;
    }

    public function getAllCategoryPost($request)
    {
        $query = $this->categoryPost->newQuery();

        $parentId = $request->query('parent_id', 0);

        if ($request->has('name') && !is_null($request->name)) {

            $query->where('name', 'like', '%' . $request->name . '%');

            $query->where('parent_id', $parentId)->orderBy('order');

            $data = $query->paginate(self::PAGINATION);

            if ($request->name) {
                $data = $data->appends('name', $request->name);
            }

            if ($request->parent_id) {
                $data = $data->appends('parent_id', $request->parent_id);
            }

            return $data;
        }

        $query->where('parent_id', $parentId)->orderBy('order');

        $data = $query->withCount('childs')->paginate(self::PAGINATION);

        return $data;
    }

    public function createCategoryPost($data)
    {
        return $this->categoryPost->create($data);
    }

    public function getCategoryPostById($id)
    {
        $categoryPost = $this->categoryPost->find($id);

        return $categoryPost;
    }

    public function delete($id)
    {
        $category = $this->categoryPost->find($id);

        if(!$category) {
            $redirectUrl = request()->parent_id ?
                route('admin.categoryPosts.index') . '?parent_id=' . request()->parent_id :
                route('admin.categoryPosts.index');

            return redirect($redirectUrl)->with([
                'status_failed' => 'Không tìm thấy danh mục'
            ]);
        }

        foreach ($category->childs as $child) {
            $this->delete($child->id);
        }

        $category->delete();

        return true;
    }

    public function getListCategoryPost()
    {
        $categoryPost =  $this->categoryPost
            ->where('parent_id', 0)
            ->get();

        return $categoryPost;
    }

    public function checkPosition($positionValue)
    {
        return $this->categoryPost->where('position', $positionValue)
            ->where('position', '!=', 0)->first();
    }

    public function getListCategoryPostEdit($id)
    {
        $categoryPost = $this->categoryPost->query()
            ->with(['childrenRecursive' => function ($category) use ($id) {
                $category->where('id', '<>', $id);
            }])
            ->where('id', '<>', $id)
            ->where('parent_id', 0)
            ->get();

        return $categoryPost;
    }

    public function updateCategoryPost($data, $id)
    {
        $categoryPost = $this->categoryPost->find($id);

        $categoryPost->update($data);

        return $categoryPost;
    }
}
