<?php

namespace App\Services\Admin\CategoryPosts;

use App\Repositories\Admin\CategoryPosts\Repository\CategoryPostRepository;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class CategoryPostService
{
    use StorageImageTrait;
    protected $categoryPostRepository;

    public function __construct(
        CategoryPostRepository $categoryPostRepository
    ) {
        $this->categoryPostRepository = $categoryPostRepository;
    }

    public function getAllCategoryPost($request)
    {
        return $this->categoryPostRepository->getAllCategoryPost($request);
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'order' => $request->order ?? 0,
            'parent_id' => $request->parent_id ?? 0,
            'description' => $request->description,
            'content' => $request->content,
            'position' => $request->position ?? 0
        ];

        $uploadData = $this->storageTraitUpload($request, 'avatar', 'public/categoryPosts');

        if ($uploadData) {
            $data['avatar'] = $uploadData['path'];
        }

       $this->categoryPostRepository->createCategoryPost($data);

        return true;
    }

    public function getCategoryPostById($id)
    {
        return $this->categoryPostRepository->getCategoryPostById($id);
    }

    public function update($request, $id)
    {
        $categoryPost = $this->categoryPostRepository->getCategoryPostById($id);

        if (!$categoryPost) {
            $redirectUrl = $request->parent_id ?
                route('admin.categoryPosts.index') . '?parent_id=' . $request->parent_id :
                route('admin.categoryPosts.index');

            return redirect($redirectUrl)->with([
                'status_failed' => 'Không tìm thấy danh mục'
            ]);
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'order' => $request->order ?? 0,
            'description' => $request->description,
            'content' => $request->content,
            'parent_id' => $request->parent_id ?? 0,
            'position' => $request->position ?? 0
        ];

        if ($request->hasFile('avatar')) {
            if ($categoryPost->avatar) {
                $path = 'public/systems/' . basename($categoryPost->avatar);
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }

            $imageUploadData = $this->storageTraitUpload($request, 'avatar', 'public/categoryPosts');
            $data['avatar'] = $imageUploadData['path'];
        }

        $this->categoryPostRepository->updateCategoryPost($data, $id);

        return true;
    }

    public function getListCategoryPost()
    {
        return $this->categoryPostRepository->getListCategoryPost();
    }

    public function getListCategoryPostEdit($id)
    {
        return $this->categoryPostRepository->getListCategoryPostEdit($id);
    }

    public function delete($id)
    {
        return $this->categoryPostRepository->delete($id);
    }

    public function changeOrder($request)
    {
        $item = $this->categoryPostRepository->getCategoryPostById($request->id);

        $item->update([
            'order' => $request->order
        ]);

        return $item;
    }

    public function changePosition($request)
    {
        $result = $this->categoryPostRepository->checkPosition($request->position);

        if($result) {
            return false;
        }

        $item = $this->categoryPostRepository->getCategoryPostById($request->id);

        $item->update([
            'position' => $request->position
        ]);

        return $item;
    }
    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) > 0) {
            foreach ($request->selectedIds as $id) {
                $this->categoryPostRepository->delete($id);
            }
            return true;
        }
    }

}
