<?php

namespace App\Services\Client\ListMovies\Services;

use App\Services\Base\BaseService;
use App\Services\Client\ListMovies\Interfaces\ListMovieInterface;

class ListMovieService extends BaseService implements ListMovieInterface
{
    public function getRepository()
    {
        return ListMovieInterface::class;
    }

    public function listMovie()
    {
        $this->repository->listMovie();
    }
}
