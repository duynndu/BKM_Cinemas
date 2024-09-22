<?php

namespace App\Services\Admin\Menus;
use App\Repositories\Admin\Menus\Repository\MenuRepository;

class MenuService
{
    protected $menuRepository;

    public function __construct(
        MenuRepository $menuRepository
    )
    {
        $this->menuRepository = $menuRepository;
    }

    public function getAllPost()
    {
        return $this->menuRepository->getAllPost();
    }

    public function getAllCategoryPost()
    {
        return $this->menuRepository->getAllCategoryPost();
    }

    public function getAllPage()
    {
        return $this->menuRepository->getAllPage();
    }

    public function getAllMenu()
    {
        return $this->menuRepository->getAllMenu();
    }

    public function getLastChildId()
    {
        return $this->menuRepository->getLastChildId();
    }

    public function store($request)
    {
        $menuData = $request->menu;

        // Xóa tất cả các bản ghi cũ để lưu lại cấu trúc menu mới
        $this->menuRepository->deleteAllStructureMenu();

        // Hàm để lưu menu đệ quy
        $this->storeMenuItems($menuData);

        return true;
    }

    public function storeMenuItems(array $items, $parentId = 0)
    {
        foreach ($items as $item) {
            $menu = $this->menuRepository->createMenu([
                'name' => $item['name'],
                'slug' => $item['slug'],
                'url' => $item['url'],
                'type' => $item['type'],
                'record_id' => $item['record_id'],
                'parent_id' => $parentId
            ]);

            if (isset($item['children']) && is_array($item['children'])) {
                $this->storeMenuItems($item['children'], $menu->id);
            }
        }

        return $menu;
    }

    public function delete()
    {
        return $this->menuRepository->delete();
    }
}
