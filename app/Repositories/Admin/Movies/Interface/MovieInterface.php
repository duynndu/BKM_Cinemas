<?php

namespace App\Repositories\Admin\Movies\Interface;

interface MovieInterface
{
    public function listMovies($request);
    public function delete($id);
    public function genreOfMovie($id);
    public function deleteGenreByMovie($record, $existingGenreid);
    public function checkExitsGenre($record, $genreId);
    public function createGenreMovie($record, $data);
    public function getMovieById($id);
    public function categoryOfPost($id);
}
