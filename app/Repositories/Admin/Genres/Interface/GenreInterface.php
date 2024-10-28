<?php

namespace App\Repositories\Admin\Genres\Interface;

interface GenreInterface
{
    public function getAllGenre($request);
    public function createGenre($data);
    public function getGenreById($id);
    public function delete($id);
    public function getListGenre();
    public function checkPosition($positionValue);
    public function getListGenreEdit($id);
    public function updateGenre($data, $id);
}
