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
        return Movie::class;
    }

    public function filter($request)
    {
        $data = $this->model->newQuery();
        $data = $this->filterByTitle($data, $request);
        $data = $this->filterByStatus($data, $request);
        $data = $this->applyOrdering($data, $request);
        $data = $this->filterByGenres($data, $request);

        $data = $data->paginate(self::PAGINATION);
        return $data->appends([
            'title' => $request->title,
            'order_with' => $request->order_with,
            'genres' => $request->genres,
            'fill_action' => $request->fill_action
        ]);
    }

    public function find($id)
    {
        $result = $this->model->with('movieGenre', 'movieActor.actor')->find($id);

        if ($result) {
            return $result;
        }

        return false;
    }

    public function changeActive($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->active ^= 1;
            $result->save();
            return $result;
        }
        return false;
    }

    public function changeHot($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->hot ^= 1;
            $result->save();
            return $result;
        }
        return false;
    }

    public function changeOrder($id, $order)
    {
        $result = $this->find($id);
        if ($result) {
            $result->order = $order;
            $result->save();
            return $result;
        }
        return false;
    }

    public function createGenre($record, $data)
    {
        return $record->movieGenre()->createMany($data);
    }

    public function createMovieActors($record, $data)
    {
        return $record->movieActor()->createMany($data);
    }

    public function updateActors($record, $data)
    {
        foreach ($data as $actorData) {
            $actor = $record->movieActor()->where('actor_id', $actorData['actor_id'])->first();
            if ($actor) {
                $actor->update($actorData);
            }
        }
    }

    public function deleteGenre($record, $data)
    {
        return $record->movieGenre()->whereIn('genre_id', $data)->delete();
    }

    public function deleteActor($record, $data)
    {
        return $record->movieActor()->whereIn('actor_id', $data)->delete();
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->movieActor()->forceDelete();
            $result->movieGenre()->forceDelete();
            $result->delete();
            return true;
        }

        return false;
    }

    public function deleteMultiple(array $ids)
    {
        collect($ids)->chunk(1000)->each(function ($chunk) {
            \App\Models\MovieGenre::whereIn('movie_id', $chunk)->forceDelete();
            \App\Models\MovieActor::whereIn('movie_id', $chunk)->forceDelete();
            $this->model->whereIn('id', $chunk)->delete();
        });
        return true;
    }
    private function filterByTitle($query, $request)
    {
        if (!empty($request->title)) {
            return $query->where('title', 'like', '%' . $request->title . '%');
        }
        return $query;
    }

    private function filterByGenres($query, $request)
    {
        $genres = $request->genres;
        if (!empty($genres)) {
            return $query->whereHas('movieGenre', function ($q) use ($genres) {
                $q->whereIn('id', $genres);
            });
        }
        return $query;
    }

    private function filterByStatus($query, $request)
    {
        if (!empty($request->fill_action)) {
            switch ($request->fill_action) {
                case 'active':
                    return $query->where('active', 1);
                case 'noActive':
                    return $query->where('active', 0);
                case 'hot':
                    return $query->where('hot', 1);
                case 'noHot':
                    return $query->where('hot', 0);
            }
        }
        return $query;
    }

    private function applyOrdering($query, $request)
    {
        if (!empty($request->order_with)) {
            switch ($request->order_with) {
                case 'postedDateASC':
                    return $query->orderBy('created_at', 'asc');
                case 'postedDateDESC':
                    return $query->orderBy('created_at', 'desc');
                case 'releaseDateASC':
                    return $query->orderBy('release_date', 'asc');
                case 'releaseDateDESC':
                    return $query->orderBy('release_date', 'desc');
                case 'premiereDateASC':
                    return $query->orderBy('premiere_date', 'asc');
                case 'premiereDateDESC':
                    return $query->orderBy('premiere_date', 'desc');
            }
        }
        return $query->orderBy('order');
    }
}
