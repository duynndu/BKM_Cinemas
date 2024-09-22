<?php

namespace App\Services\Admin\Tags;

use App\Repositories\Admin\Tags\Repository\TagRepository;

class TagService
{
    protected $tagRepository;
    public function __construct(TagRepository $tagRepository)
    {
        $this->tagRepository = $tagRepository;
    }
    public function getAllTags($request)
    {
        $listAlltags = $this->tagRepository->getAlltags($request);
        return $listAlltags;
    }
    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $this->tagRepository->store($data);

        return true;
    }

    public function update($request, $id)
    {
        $tag = $this->tagRepository->getTagById($id);

        if (!$tag) {
            return redirect()->route('admin.tags.index')->with([
                'status_failed' => "Không tìm thấy thẻ"
            ]);
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'order' => $request->order,
            'active' => $request->active,
        ];

         $this->tagRepository->updateTag($data, $id);

        return true;
    }

    public function changeActive($request)
    {
        $item = $this->tagRepository->getTagById($request->id);

        $item->update([
            'active' => $item->active == 1 ? 0 : 1
        ]);

        return $item;
    }
    public function changeOrder($request)
    {
        $item = $this->tagRepository->getTagById($request->id);

        $item->update([
            'order' => $request->order
        ]);
        return $item;
    }

    public function getTagById($id)
    {
        $tag = $this->tagRepository->getTagById($id);
        return $tag;
    }

    public function delete($id)
    {
        return $this->tagRepository->delete($id);
    }
}
