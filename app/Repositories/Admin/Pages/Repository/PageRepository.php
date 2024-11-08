<?php

namespace App\Repositories\Admin\Pages\Repository;
use App\Models\Page;
use App\Repositories\Admin\Pages\Interface\PageInterface;
use App\Repositories\Base\BaseRepository;

class PageRepository extends BaseRepository implements PageInterface
{
    public function getModel()
    {
        return Page::class;
    }

    public function countPage()
    {
        return $this->model->count();
    }

    public function getAll()
    {
        $pages = $this->model->orderBy('order');

        if (request()->name) {
            $pages = $pages->where('name', 'like', '%' . request()->name . '%');
        }

        $pages = $pages->paginate(self::PAGINATION);

        return $pages;
    }

    public function getAllActive()
    {
        return $this->model->where('active', 1)->get();
    }
}
