<?php

namespace App\Services\Admin\Genres\Interfaces;

use App\Services\Base\BaseServiceInterface;

interface GenreServiceInterface extends BaseServiceInterface
{
    public function create(&$request);
    public function update(&$request, $id);
    public function getListGenreEdit($id);
    public function delete($id);
    public function changeOrder($request);
    public function changePosition($request);
    public function deleteMultipleChecked($request);
}
