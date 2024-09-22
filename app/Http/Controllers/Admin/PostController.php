<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Posts\PostRequest;
use App\Models\Post;
use App\Services\Admin\CategoryPosts\CategoryPostService;
use App\Services\Admin\Posts\PostService;
use App\Traits\RemoveImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    use RemoveImageTrait;

    protected $postService;

    protected $categoryPostService;


    public function __construct(
        CategoryPostService     $categoryPostService,
        PostService             $postService,
    ) {
        $this->postService = $postService;

        $this->categoryPostService = $categoryPostService;
    }

    public function index(Request $request)
    {
        $listCategoryPost = $this->postService->getListCategoryPost();

        $results = $this->postService->allFillter($request);

        return view('admin.pages.posts.index', [
            'data' => $results['data'],
            'listCategoryPost' => $listCategoryPost,
            'hot' => $results['hot'],
            'active' => $results['active'],
            'name' => $results['name'],
            'typeOrder' => $results['typeOrder'],
            'selectedCategories' => $results['categories']
        ]);
    }

    public function create()
    {
        $listCategoryPost = $this->postService->getListCategoryPost();

        $tags = $this->postService->listTags();

        return view('admin.pages.posts.create', compact('listCategoryPost', 'tags'));
    }

    public function store(PostRequest $request)
    {

        try {
            DB::beginTransaction();

            $this->postService->store($request);

            DB::commit();

            $redirectUrl = route('admin.posts.index');

            return redirect($redirectUrl)->with([
                'status_succeed' => "Thêm bài viết thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm');
        }
    }

    public function edit($id)
    {
        $post = $this->postService->getPostById($id);

        if (!$post) {
            return redirect()->route('admin.posts.index')->with([
                'status_failed' => "Không tìm thấy bài viết"
            ]);
        }

        $listCategoryPost = $this->postService->getListCategoryPost();

        $tags = $this->postService->listTags();

        $cateData = $this->postService->categoryOfPost($id);

        $tagsSelected = $this->postService->tagsSelected($id)->toArray();

        return view('admin.pages.posts.edit', compact(
            'post',
            'cateData',
            'listCategoryPost',
            'tags',
            'tagsSelected',
        ));
    }

    public function update(PostRequest $request, $id)
    {
        try {
            DB::beginTransaction();

            $this->postService->update($request, $id);

            DB::commit();

            $redirectUrl = route('admin.posts.index');

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật bài viết thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi cập nhật');
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $this->postService->delete($id);

            DB::commit();

            $redirectUrl = route('admin.posts.index');

            return redirect($redirectUrl)->with([
                'status_succeed' => 'Xóa bài viết thành công'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi xóa');
        }
    }

    public function removeAvatarImage(Request $request)
    {
        $post = $this->removeImage($request, new Post, 'avatar', 'posts');

        return response()->json(['avatar' => $post]);
    }

    public function changeOrder(Request $request)
    {
        $this->postService->changeOrder($request);

        return response()->json(['newOrder' => $request->order]);
    }

    public function changeHot(Request $request)
    {
        $item = $this->postService->changeHot($request);

        return response()->json(['newHot' => $item->hot]);
    }

    public function changeActive(Request $request)
    {
        $item = $this->postService->changeActive($request);

        return response()->json(['newStatus' => $item->active]);
    }

    public function destroyImage($id)
    {
        try {
            DB::beginTransaction();

            $this->postService->destroyImage($id);

            DB::commit();

            return response()->json([
                'delete' => true,
                'message' => 'Xóa ảnh thành công'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error("File: " . $e->getFile() . '---Line: ' . $e->getLine() . "---Message: " . $e->getMessage());

            return response()->json([
                'code' => 500,
                'message' => trans('message.server_error')
            ], 500);
        }
    }
}
