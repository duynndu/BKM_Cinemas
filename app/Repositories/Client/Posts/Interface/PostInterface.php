<?php

namespace App\Repositories\Client\Posts\Interface;

interface PostInterface
{
    public function getPostFirst($slug);
    public function getPostRelated($slug);
}
