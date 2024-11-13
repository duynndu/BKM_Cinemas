<?php

namespace App\Repositories\Admin\Dashboards\Repositories;

use App\Models\Post;
use App\Repositories\Admin\Dashboards\Interfaces\DashboardInterface;

class DashboardRepository implements DashboardInterface
{

    protected $post;

    public function __construct(
        Post $post
    )
    {
        $this->post = $post;
    }

    public function posts()
    {
        return $this->post->get();
    }

    public function top10PostLatest()
    {
        return $this->post->orderBy('id', 'desc')->take(10)->get();
    }

}
