<?php

namespace App\Services\Admin\Posts;

use App\Models\Image;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\PostTag;
use App\Models\Tag;
use App\Repositories\Admin\Posts\Repository\PostRepository;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class PostService
{
    use StorageImageTrait;

    protected $post;
    protected $postCategory;

    protected $Images;

    protected $tags;
    protected $postTag;
    protected $postRepository;
    const PAGINATION = 10;

    public function __construct(
        Post                $post,
        PostCategory        $postCategory,
        Image               $Images,
        Tag                 $tags,
        PostTag             $postTag,
        PostRepository      $postRepository
    )
    {
        $this->post = $post;
        $this->postCategory = $postCategory;
        $this->Images = $Images;
        $this->tags = $tags;
        $this->postTag = $postTag;
        $this->postRepository = $postRepository;
    }


    public function store($request)
    {
        $dataPost = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'content' => $request->content,
            'order' => $request->order,
            'active' => $request->active,
            'hot' => $request->hot ? 1 : 0,
        ];

        $uploadData = $this->storageTraitUpload($request, 'avatar', 'public/posts');

        if ($uploadData) {
            $dataPost['avatar'] = $uploadData['path'];
        }

        $post = $this->postRepository->createPost($dataPost);

        if ($post) {
            foreach ($request->parent_id as $category) {
                $post->postCategories()->create([
                    'category_id' => $category
                ]);
            }
        }

        $relatedPhotos = [];
        if ($request->hasFile('relatedPhotos')) {
            $relatedPhotos = $this->storageTraitUploadMultiple($request, 'relatedPhotos', 'public/postRelated');
        }

        foreach ($relatedPhotos as $photo) {
            $post->images()->create([
                'path' => $photo['path']
            ]);
        }

        $tagIds = [];

        if (isset($request->tags) && count($request->tags) > 0) {
            foreach ($request->tags as $tagName) {
                $tag = $this->postRepository->checkExitsTags($tagName);
                $tagIds[] = $tag->id;
            }
        }

        $tagData = [];

        foreach ($tagIds as $tagId) {
            $tagData[$tagId] = [
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        $post->tags()->attach($tagData);

        return true;
    }


    public function getPostById($id)
    {
        return $this->postRepository->getPostById($id);
    }

    public function categoryOfPost($id)
    {
        return $this->postRepository->categoryOfPost($id);
    }

    public function tagsSelected($id)
    {
        return $this->postRepository->tagsSelected($id);
    }

    public function update($request, $id)
    {
        $post = $this->post->findOrFail($id);

        $uploadAvatar = $this->storageTraitUpload($request, 'avatar', 'public/posts');

        $dataPost = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'content' => $request->content,
            'order' => $request->order,
            'active' => $request->active,
            'hot' => $request->hot ? 1 : 0,
        ];

        if ($uploadAvatar) {
            $dataPost['avatar'] = $uploadAvatar['path'];
        }

        // Update post categories
        $categoryIds = $post->postCategories->pluck('category_id')->toArray();

        // Xóa các danh mục theo bài viết không còn trong request
        foreach ($categoryIds as $existingCategoryId) {

            if (!in_array($existingCategoryId, $request->parent_id)) {
                // xóa mối quan hệ giữa sản phẩm và các danh mục (categories) mà hiện tại
                $this->postRepository->deleteCategoryPostByPost($post, $existingCategoryId);
            }
        }

        // Thêm hoặc cập nhật các danh mục từ request
        foreach ($request->parent_id as $category) {

            // Kiểm tra nếu đã có bản ghi với category_id này tồn tại
            $existingPostCategory = $this->postRepository->checkExitsCategoryPost($post, $category);

            if ($existingPostCategory) {
                // Nếu tồn tại và đã bị xóa, khôi phục nó
                if ($existingPostCategory->trashed()) {
                    $existingPostCategory->restore();
                }
            } else {
                // Nếu không tồn tại, tạo mới
                $this->postRepository->createCategoryPost($post, [
                    'category_id' => $category
                ]);
            }
        }

        // Handle related photos
        $relatedPhotos = [];

        if ($request->hasFile('relatedPhotos')) {
            $relatedPhotos = $this->storageTraitUploadMultiple($request, 'relatedPhotos', 'public/postRelated');
        }

        // Save related photos
        foreach ($relatedPhotos as $photo) {
            $this->postRepository->createRelatedPhotoPost($post, [
                'path' => $photo['path']
            ]);
        }

        // Đây là danh sách thẻ từ form, có thể là ID số nguyên hoặc tên thẻ
        $inputTags = [];

        $tagIds = [];

        if (is_array($request->tags)) {
            $inputTags = $request->tags;
            $tagIds = array_filter($inputTags, 'is_numeric'); // Thẻ đã tồn tại (ID số nguyên)
        }

        // Tách biệt các thẻ đã tồn tại (ID số nguyên) và các thẻ mới (chuỗi văn bản)
        $newTags = array_filter($inputTags, function ($tag) {
            return !is_numeric($tag); // Thẻ mới (chuỗi văn bản)
        });

        $tagData = [];
        foreach ($newTags as $tagName) {
            $tag = $this->postRepository->checkExitsTags($tagName);
            $tagData[] = $tag->id; // Thêm ID của thẻ mới vào mảng tagData
        }

        // Cập nhật $tagIds để bao gồm các ID của thẻ mới
        $tagIds = array_merge($tagIds, $tagData);


        // Bước 3: Xử lý việc xóa các tag không còn được chọn
        $currentTagIds = $post->tags->pluck('id')->toArray(); // ID của các tag hiện tại gán cho bài viết

        $tagsToRemove = array_diff($currentTagIds, $tagIds);

        if ($tagsToRemove) {
            // Xóa các bản ghi từ bảng post_tags (xóa mềm)
            $this->postTag->where('post_id', $post->id)
                ->whereIn('tag_id', $tagsToRemove)
                ->delete();
        }

        $tagsDeletedSoft = $this->postTag
            ->where('post_id', $post->id)
            ->whereIn('tag_id', $tagIds)
            ->onlyTrashed()
            ->get();

        foreach ($tagsDeletedSoft as $tag) {
            // Cập nhật (Khôi phục) lại tất cả các bản ghi bị xóa mềm
            $this->postRepository->updateAllRecordPostTagByPost($tag->tag_id);
        }

        foreach ($tagIds as $tagId) {
            if (!$post->tags->contains($tagId)) {
                // có tác dụng gắn (attach) một thẻ (tag) vào bài viết nếu thẻ đó chưa được liên kết với bài viết.
                $this->postRepository->attachTagIfNotExists($post, $tagId);
            }
        }

        $this->postRepository->updatePost($dataPost, $id);

        // dịch tags
        $tagsData = [];

        if (isset($request->tags) && count($request->tags) > 0) {
            foreach ($request->tags as $tagName) {
                $tag = $this->postRepository->checkExitsTags($tagName);

                $tagIds[] = $tag->id;

                $tagsData[$tag->id] = [
                    'name' => $tagName, // Lưu tên thẻ để dịch sau này
                ];
            }
        }

        return $post;
    }

    public function delete($id)
    {
        return $this->postRepository->delete($id);
    }

    public function changeOrder($request)
    {
        $item = $this->post->findOrFail($request->id);
        $item->order = $request->order;
        $item->save();
        return $item;
    }

    public function changeHot($request)
    {
        $item = $this->post->findOrFail($request->id);
        $item->hot = $item->hot == 1 ? 0 : 1;
        $item->save();
        return $item;
    }

    public function changeActive($request)
    {
        $item = $this->post->findOrFail($request->id);
        $item->active = $item->active == 1 ? 0 : 1;
        $item->save();
        return $item;
    }

    public function destroyImage($id)
    {
        $image = $this->postRepository->getImageRelatedPhotoById($id);

        if (!$image) {
            return response()->json([
                'deleted' => false,
                'message' => 'Không tìm thấy hình ảnh'
            ], 404);
        }
        $imagePath = 'public/postRelated/' . basename($image->path);
        if (Storage::exists($imagePath)) {
            Storage::delete($imagePath);
        }

        $image->delete();

        return true;
    }

    public function getListCategoryPost()
    {
        return $this->postRepository->getListCategoryPost();
    }

    public function listTags()
    {
        return $this->postRepository->listTags();
    }

    public function allFillter($request)
    {
        return $this->postRepository->allFillter($request);
    }
}
