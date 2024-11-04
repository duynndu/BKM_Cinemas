<?php

namespace App\Services\Admin\Posts\Interfaces;

use App\Services\Base\BaseServiceInterface;

interface PostServiceInterface extends BaseServiceInterface
{
    public function create(&$request);
    public function categoryOfPost($id);
    public function tagsSelected($id);
    public function update(&$request, $id);
    public function delete($id);
    public function changeOrder($request);
    public function changeHot($request);
    public function changeActive($request);
    public function destroyImage($id);
    public function deleteMultipleChecked($request);
}
