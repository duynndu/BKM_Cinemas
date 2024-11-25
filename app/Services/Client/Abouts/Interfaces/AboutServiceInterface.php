<?php

namespace App\Services\Client\Abouts\Interfaces;

interface AboutServiceInterface{
    public function getSytemBySlug($slug);
    public function getSystemByType($type);
}
