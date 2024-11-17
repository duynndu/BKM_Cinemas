<?php

namespace App\Services\Client\Posts\Interface;

interface PostServiceInterface {
    public function getPostFirst($slug);
    public function getPostRelated($slug);
}
