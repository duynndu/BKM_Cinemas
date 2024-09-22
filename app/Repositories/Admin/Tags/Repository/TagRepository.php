<?php

namespace App\Repositories\Admin\Tags\Repository;

use App\Models\Post;
use App\Models\PostTag;
use App\Models\Tag;
use App\Repositories\Admin\Tags\Interface\TagInterface;

class TagRepository implements TagInterface
{
    protected $postTag;

    protected $post;

    protected $tag;
    const PAGINATION = 10;

    public function __construct(
        PostTag $postTag,
        Post $post,
        Tag $tag
    )
    {
        $this->postTag = $postTag;
        $this->post = $post;
        $this->tag = $tag;
    }

    public function listTags()
    {
        $tags = $this->tag->orderBy('id', 'desc')->get();

        return $tags;
    }

    public function getAlltags($request)
    {

        $query = $this->tag->newQuery();

        if (!empty($request->name)) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if (!empty($request->fill_action)) {
            switch ($request->fill_action):
                case 'active':
                    $query->where('active', 1);
                    break;
                case 'noActive':
                    $query->where('active', 0);
                    break;
            endswitch;
        }
        $data = $query->orderBy('order')->paginate(self::PAGINATION);

        switch ($request->fill_action):
            case 'active':
                $data = $data->appends('fill_action', 'active');
                break;
            case 'noActive':
                $data = $data->appends('fill_action', 'noActive');
                break;
        endswitch;

        return $data;
    }
    public function store($data)
    {
        return $this->tag->create($data);
    }

    public function tagsSelected($id)
    {
        return $this->postTag
            ->where('post_id', $id)
            ->whereNull('deleted_at')
            ->pluck('tag_id'); // Lấy các tag chưa bị xóa
    }
    public function getTagById($id)
    {
        $tagEdit = $this->tag->find($id);

        return $tagEdit;
    }


    public function updateTag($data, $id)
    {
        $tag = $this->tag->find($id);

        $tag->update($data);

        return $tag;
    }

    public function delete($id)
    {
        $tag = $this->tag->find($id);

        if (!$tag) {

            $redirectUrl = route('admin.tags.index');

            return redirect($redirectUrl)->with([
                'status_failed' => 'Không tìm thấy thẻ'
            ]);
        }

        $tag->postTags()->delete();

        $tag->delete();

        return true;
    }
}
