<?php

namespace App\Repositories\Admin\Genres\Interface;

use App\Repositories\Base\RepositoryInterface;

interface GenreInterface extends RepositoryInterface
{
    public function getAll();
    public function delete($id);
    public function getListGenre();
    public function checkPosition($positionValue);
    public function getListGenreEdit($id);
    public function changeOrder($id, $order);
}
