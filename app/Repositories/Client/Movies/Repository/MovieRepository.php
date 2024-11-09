<?php

namespace App\Repositories\Client\Movies\Repository;

use App\Models\Movie;
use App\Repositories\Base\BaseRepository;
use App\Repositories\Client\Movies\Interface\MovieInterface;

class MovieRepository extends BaseRepository implements MovieInterface
{


    public function getModel()
    {
        return Movie::class;
    }

    public function listMovie()
    {
        dd("123");
        return $this->model->all();
    }
}
