<?php

namespace App\Services\Admin\CategoryPosts\Interfaces;

use App\Services\Base\BaseServiceInterface;

interface CategoryPostServiceInterface extends BaseServiceInterface
{
    public function changeOrder($request);
    public function changeActive($request);
    public function deleteMultipleChecked($request);
    
}
