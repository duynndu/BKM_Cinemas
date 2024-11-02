<?php

namespace App\Repositories\Admin\Movies\Repository;

use App\Models\Movie;
use App\Models\MovieGenre;

use App\Repositories\Admin\Movies\Interface\MovieInterface;

class MovieRepository implements MovieInterface
{
    protected $movie;
    protected $movieGenre;

    const PAGINATION = 10;

    public function __construct(
        Movie  $movie,
        MovieGenre $movieGenre

    ) {
        $this->movie = $movie;
        $this->movieGenre = $movieGenre;
    }

    public function listMovies($request)
    {
        $query = $this->movie->query();
        $genres = $request->genres ?? [];

        if (!empty($request->name)) {
            $query->where('title', 'LIKE', '%' . $request->name . '%');
        }
        if (!empty($genres)) {

            $movieIds = $this->movieGenre
                ->whereIn('genre_id', $genres)
                ->groupBy('movie_id')
                ->havingRaw('COUNT(DISTINCT genre_id) = ?', [count($genres)])
                ->pluck('movie_id')
                ->toArray();
            $query->whereIn('id', $movieIds);
        }

        $typeOrder = $request->order_with;
        if (!empty($typeOrder)) {
            switch ($typeOrder) {
                case 'postedDateASC':
                    $query->orderBy('created_at', 'asc');
                    break;
                case 'postedDateDESC':
                    $query->orderBy('created_at', 'desc');
                    break;
                case 'releaseDateASC':
                    $query->orderBy('release_date', 'asc');
                    break;
                case 'releaseDateDESC':
                    $query->orderBy('release_date', 'desc');
                    break;
                case 'premiereDateASC':
                    $query->orderBy('premiere_date', 'desc');
                    break;
                case 'premiereDateDESC':
                    $query->orderBy('premiere_date', 'desc');
                    break;
                default:
                    $query->orderBy('created_at', 'desc');
                    break;
            }
        } else {
            // Sắp xếp mặc định nếu không có order_with
            $query->orderBy('created_at', 'desc');
        }


        switch ($request->fill_action) {
            case 'hot':
                $query->where('hot', 1);
              
                break;
            case 'noHot':
                $query->where('hot', 0);
             
                break;
            case 'active':
                $query->where('active', 1);
                
                break;
            case 'noActive':
                $query->where('active', 0);
              
                break;
            default:
                $query->orderBy('order');
                break;
        }

        $listMovies = $query->orderBy('order')->paginate(self::PAGINATION);

        $listMovies = $listMovies->appends([
            'name' => $request->name,
            'typeOrder' => $request->order_with,
            'genres' => $genres,
        ]);
      
        switch (true) {
            case $request->fill_action == 'hot':
                $listMovies = $listMovies->appends('fill_action', 'hot');
                break;
            case $request->fill_action == 'noHot':
                $listMovies = $listMovies->appends('fill_action', 'noHot');
                break;
            case $request->fill_action == 'active':
                $listMovies = $listMovies->appends('fill_action', 'active');
                break;
            case $request->fill_action == 'noActive':
                $listMovies = $listMovies->appends('fill_action', 'noActive');
                break;
            case $typeOrder == 'postedDateASC':
                $listMovies = $listMovies->appends('order_with', 'postedDateASC');
                break;
            case $typeOrder == 'postedDateDESC':
                $listMovies = $listMovies->appends('order_with', 'postedDateDESC');
                break;
            case $typeOrder == 'releaseDateASC':
                $listMovies = $listMovies->appends('order_with', 'releaseDateASC');
                break;
            case $typeOrder == 'releaseDateDESC':
                $listMovies = $listMovies->appends('order_with', value: 'releaseDateDESC');
                break;
            case $typeOrder == 'premiereDateASC':
                $listMovies = $listMovies->appends('order_with', 'premiereDateASC');
                break;
            case $typeOrder == 'premiereDateDESC':
                $listMovies = $listMovies->appends('order_with', value: 'premiereDateDESC');
                break;
            default:
                $query->orderBy('created_at', 'desc');
                break;
        }
        return [
            'listMovies' => $listMovies,
            'genres' => $genres
        ];
    }


    public function delete($id)
    {
        $movie = $this->movie->find($id);

        if (!$movie) {
            return redirect()->route('admin.movies.index')->with([
                'status_failed' => "Không tìm thấy phim"
            ]);
        }
        if ($movie) {
            $movie->movieActor()->delete();
            $movie->movieGenre()->delete();
            $movie->delete();
        }
        return true;
    }


    public function genreOfMovie($id)
    {
        $data = [];
        $movie = $this->movie->find($id);
        if (!$movie) {
            return redirect()->route('admin.movies.index')->with('status_failed', 'Không tìm thấy phim');
        }
        $genre = $this->movie->find($id);

        $data = $genre->movieGenre->pluck('genre_id')->all();;
        return $data;
    }

    public function deleteGenreByMovie($record, $existingGenreid)
    {
        return $record->movieGenre()->where('genre_id', $existingGenreid)->delete();
    }

    public function checkExitsGenre($record, $genreId)
    {
        return $record->movieGenre()
            ->withTrashed()
            ->where('genre_id', $genreId)
            ->first();
    }
    public function createGenreMovie($record, $data)
    {
        return $record->movieGenre()->create($data);
    }

    public function getMovieById($id)
    {
        $postEdit = $this->movie->find($id);

        return $postEdit;
    }

    public function categoryOfPost($id)
    {
        $data = [];

        $cate = $this->movie->find($id);

        $data = $cate->movieGenres->pluck('genre.id')->all();
        return $data;
    }

}
