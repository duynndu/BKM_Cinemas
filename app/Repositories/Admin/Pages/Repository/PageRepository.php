<?php

namespace App\Repositories\Admin\Pages\Repository;

use App\Models\Language;
use App\Models\Page;
use App\Repositories\Admin\Pages\Interface\PageInterface;

class PageRepository implements PageInterface
{
    const PAGINATION = 6;

    protected $page;

    public function __construct(
        Page     $page,
    )
    {
        $this->page = $page;
    }

    public function countPage()
    {
        return $this->page->count();
    }

    public function getAllPage($request)
    {
        $pages = $this->page->orderBy('order');

        if ($request->name) {
            $pages = $pages->where('name', 'like', '%' . $request->name . '%');
        }

        $pages = $pages->paginate(self::PAGINATION);

        return $pages;
    }

    public function createPage($data)
    {
        return $this->page->create($data);
    }

    public function getPageById($id)
    {
        $page = $this->page->find($id);
        return $page;
    }

    public function updatePage($data, $id)
    {
        $page = $this->page->find($id);

        $page->update($data);

        return $page;
    }

    public function delete($id)
    {
        $page = $this->page->find($id);

        if (!$page) {
            return redirect()->route('admin.pages.index')->with('status_failed', 'Không tìm thấy trang');
        }

        $page->delete();

        return $page;
    }
}
