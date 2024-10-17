<?php

namespace App\Repositories\Admin\Genres\Repository;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieGenre;
use App\Repositories\Admin\Genres\Interface\GenreInterface;

class GenreRepository implements GenreInterface
{
    const PAGINATION = 10;

    protected $genre;

    protected $movieGenre;

    protected $movie;

    public function __construct(
        Genre $genre,
        MovieGenre $movieGenre,
        Movie $movie,

    ) {
        $this->genre = $genre;
        $this->movieGenre = $movieGenre;
        $this->movie = $movie;
    }

    public function getAllGenre($request)
    {
        $query = $this->genre->newQuery();

        $parentId = $request->query('parent_id', 0);

        if ($request->has('name') && !is_null($request->name)) {

            $query->where('name', 'like', '%' . $request->name . '%');

            $query->where('parent_id', $parentId)->orderBy('order');

            $data = $query->paginate(self::PAGINATION);

            if ($request->name) {
                $data = $data->appends('name', $request->name);
            }

            if ($request->parent_id) {
                $data = $data->appends('parent_id', $request->parent_id);
            }

            return $data;
        }

        $query->where('parent_id', $parentId)->orderBy('order');

        $data = $query->withCount('childs')->paginate(self::PAGINATION);

        return $data;
    }

    public function createGenre($data)
    {
        return $this->genre->create($data);
    }

    public function getGenreById($id)
    {
        $genre = $this->genre->find($id);

        return $genre;
    }

    public function delete($id)
    {
        $category = $this->genre->find($id);

        if (!$category) {
            $redirectUrl = request()->parent_id ?
                route('admin.Genres.index') . '?parent_id=' . request()->parent_id :
                route('admin.Genres.index');

            return redirect($redirectUrl)->with([
                'status_failed' => 'Không tìm thấy thể loại'
            ]);
        }

        foreach ($category->childs as $child) {
            $this->delete($child->id);
        }

        $category->delete();

        return true;
    }

    public function getListGenre()
    {
        $genre =  $this->genre
            ->where('parent_id', 0)
            ->get();

        return $genre;
    }

    public function checkPosition($positionValue)
    {
        return $this->genre->where('position', $positionValue)
            ->where('position', '!=', 0)->first();
    }

    public function getListGenreEdit($id)
    {
        $genre = $this->genre->query()
            ->with(['childrenRecursive' => function ($value) use ($id) {
                $value->where('id', '<>', $id);
            }])
            ->where('id', '<>', $id)
            ->where('parent_id', 0)
            ->get();

        return $genre;
    }

    public function updateGenre($data, $id)
    {
        $genre = $this->genre->find($id);

        $genre->update($data);

        return $genre;
    }
}
