<?php

namespace App\Services\Admin\Genres;

use App\Repositories\Admin\Genres\Repository\GenreRepository;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class GenreService
{
    use StorageImageTrait;
    protected $genreRepository;

    public function __construct(
        GenreRepository $genreRepository
    ) {
        $this->genreRepository = $genreRepository;
    }

    public function getAllGenre($request)
    {
        return $this->genreRepository->getAllGenre($request);
    }

    public function store($request)
    {
        $data = [
            'name' => $request->name,
            'slug' => $request->slug,
            'order' => $request->order ?? 0,
            'parent_id' => $request->parent_id ?? 0,
            'description' => $request->description,
            'content' => $request->content,
            'position' => $request->position ?? 0
        ];

      
     
        $uploadData = $this->storageTraitUpload($request, 'avatar', 'public/genres');
        if ($uploadData) {
            $data['avatar'] = $uploadData['path'];
        }

       
        $this->genreRepository->createGenre($data);

        return true;
    }

    public function getGenreById($id)
    {
        return $this->genreRepository->getGenreById($id);
    }

    public function update($request, $id)
    {
        $genre = $this->genreRepository->getGenreById($id);

        if (!$genre) {
            $redirectUrl = $request->parent_id ?
                route('admin.Genres.index') . '?parent_id=' . $request->parent_id :
                route('admin.Genres.index');

            return redirect($redirectUrl)->with([
                'status_failed' => 'Không tìm thấy thể loại'
            ]);
        }

        $data = [
          'name' => $request->name,
            'slug' => $request->slug,
            'order' => $request->order ?? 0,
            'description' => $request->description,
            'content' => $request->content,
            'parent_id' => $request->parent_id ?? 0,
            'position' => $request->position ?? 0
        ];

        if ($request->hasFile('avatar')) {
            if ($genre->avatar) {
                $path = 'public/genres/' . basename($genre->avatar);
                if (Storage::exists($path)) {
                    Storage::delete($path);
                }
            }

            $imageUploadData = $this->storageTraitUpload($request, 'avatar', 'public/genres');
            $data['avatar'] = $imageUploadData['path'];
        }

        $this->genreRepository->updateGenre($data, $id);

        return true;
    }

    public function getListGenre()
    {
        return $this->genreRepository->getListGenre();
    }

    public function getListGenreEdit($id)
    {
        return $this->genreRepository->getListGenreEdit($id);
    }

    public function delete($id)
    {
        return $this->genreRepository->delete($id);
    }

    public function changeOrder($request)
    {
        $item = $this->genreRepository->getGenreById($request->id);

        $item->update([
            'order' => $request->order
        ]);

        return $item;
    }

    public function changePosition($request)
    {
        $result = $this->genreRepository->checkPosition($request->position);

        if($result) {
            return false;
        }

        $item = $this->genreRepository->getGenreById($request->id);

        $item->update([
            'position' => $request->position
        ]);

        return $item;
    }
    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) > 0) {
            foreach ($request->selectedIds as $id) {
                $this->genreRepository->delete($id);
            }
            return true;
        }
    }

}
