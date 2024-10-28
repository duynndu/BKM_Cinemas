<?php

namespace App\Services\Admin\Pages;

use App\Repositories\Admin\Pages\Repository\PageRepository;

class PageService
{
    protected $pageRepository;

    public function __construct(
        PageRepository $pageRepository
    )
    {
        $this->pageRepository = $pageRepository;
    }

    public function countPage()
    {
        return $this->pageRepository->countPage();
    }

    public function getAllPage($request)
    {
        return $this->pageRepository->getAllPage($request);
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $page = $this->pageRepository->createPage($data);

        return $page;
    }

    public function getPageById($id)
    {
        return $this->pageRepository->getPageById($id);
    }


    public function update($request, $id)
    {
        $page = $this->pageRepository->getPageById($id);

        if (!$page) {
            return redirect()->route('admin.pages.index')->with('status_failed', 'Không tìm thấy trang');
        }

        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'order' => $request->order,
            'active' => $request->active,
        ];

        $page = $this->pageRepository->updatePage($data, $id);

        return $page;
    }

    public function delete($id)
    {
        return $this->pageRepository->delete($id);
    }
}
