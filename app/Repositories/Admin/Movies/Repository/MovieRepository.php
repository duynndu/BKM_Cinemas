<?php

namespace App\Repositories\Admin\Movies\Repository;

use App\Models\Movie;
use App\Models\MovieGenre;
use App\Repositories\Admin\Movies\Interface\MovieInterface;
use App\Repositories\Base\BaseRepository;

class MovieRepository extends BaseRepository implements MovieInterface
{
    public function getModel()
    {
        return \App\Models\Movie::class;
    }
}
