<?php

namespace App\Repositories\Admin\Tags\Interface;

interface TagInterface
{
    public function tagsSelected($id);
    public function changeActive($id);
    public function changeOrder($id, $order);
    public function getAllActive();
}
