<?php

namespace App\Services\Admin\Movies;

use App\Models\Actor;
use App\Models\Image;
use App\Models\Movie;
use App\Models\MovieGenre;
use App\Repositories\Admin\Genres\Repository\GenreRepository;
use App\Repositories\Admin\Movies\Repository\MovieRepository;
use App\Traits\RemoveImageTrait;
use App\Traits\StorageImageTrait;
use Illuminate\Support\Facades\Storage;

class MovieService
{
    use StorageImageTrait, RemoveImageTrait;

    protected $movie;
    protected $movieGenre;

    protected $Images;
    protected $movieRepository;
    protected $actors;
    protected $genreRepository;

    const PAGINATION = 10;

    public function __construct(
        Movie                $movie,
        MovieGenre        $movieGenre,
        Image               $Images,
        MovieRepository      $movieRepository,
        Actor $actor,
        GenreRepository $genreRepository
    ) {
        $this->movieGenre = $movieGenre;
        $this->movie = $movie;
        $this->Images = $Images;
        $this->movieRepository = $movieRepository;
        $this->actors = $actor;
        $this->genreRepository = $genreRepository;
    }

    public function delete($id)
    {
        return $this->movieRepository->delete($id);
    }

    public function changeHot($request)
    {
        $item = $this->movie->findOrFail($request->id);
        $item->hot = $item->hot == 1 ? 0 : 1;
        $item->save();
        return $item;
    }
    public function getMovieById($id)
    {
        return $this->movieRepository->getMovieById($id);
    }



    public function changeOrder($request)
    {
        $item = $this->movie->findOrFail($request->id);
        $item->order = $request->order;
        $item->save();
        return $item;
    }



    public function changeActive($request)
    {
        $item = $this->movie->findOrFail($request->id);
        $item->active = $item->active == 1 ? 0 : 1;
        $item->save();
        return $item;
    }

    public function update($request, $id)
    {

        $movie = $this->movie->with('movieGenre')->find($id);
        $dataUpdated = [
            'title' => $request->title,
            'slug' => $request->slug,
            'director' => $request->director,
            'duration' => $request->duration,
            'age' => $request->age,
            'format' => $request->format,
            'release_date' => $request->release_date,
            'premiere_date' => $request->premiere_date,
            'country' => $request->country,
            'trailer_url' => $request->trailer_url,
            'language' => $request->language,
            'description' => $request->description,
            'content' => $request->content,
            'order' => $request->order,
            'active' => $request->active ? 1 : 0,
            'hot' => $request->hot ?? 0,
        ];
        if ($request->hasFile('image')) {
            $this->existImage($movie, 'image', 'movies');

            $imageUploadData = $this->storageTraitUpload($request, 'image', 'public/movies');
            $dataUpdated['image'] = $imageUploadData['path'];
            // dd($dataUpdated['image']);
        }
        if ($request->hasFile('banner_movie')) {
            $this->existImage($movie, 'banner_movie', 'movies');

            $bannerUploadData = $this->storageTraitUpload($request, 'banner_movie', 'public/movies');
            $dataUpdated['banner_movie'] = $bannerUploadData['path'];
            //  dd($dataUpdated['banner_movie']);
        }

        // Update post categories
        $genreIds = $movie->movieGenre->pluck('genre_id')->toArray();

        // Xóa các danh mục theo bài viết không còn trong request
        foreach ($genreIds as $existingGenreId) {

            if (!in_array($existingGenreId, $request->parent_id)) {
                // xóa mối quan hệ giữa sản phẩm và các danh mục (categories) mà hiện tại
                $this->movieRepository->deleteGenreByMovie($movie, $existingGenreId);
            }
        }

        // Thêm hoặc cập nhật các danh mục từ request
        foreach ($request->parent_id as $genre) {

            // Kiểm tra nếu đã có bản ghi với category_id này tồn tại
            $existingGenreMovie = $this->movieRepository->checkExitsGenre($movie, $genre);

            if ($existingGenreMovie) {
                // Nếu tồn tại và đã bị xóa, khôi phục nó
                if ($existingGenreMovie->trashed()) {
                    $existingGenreMovie->restore();
                }
            } else {
                // Nếu không tồn tại, tạo mới
                $this->movieRepository->createGenreMovie($movie, [
                    'genre_id' => $genre
                ]);
            }
        }

        // Thêm diễn viên mới
        if (!empty($request->name_actor) || !empty($request->birth_date) || !empty($request->nationality) || !empty($request->role)) {
            $dataActors = [
                "name_actor" => $request->name_actor,
                "birth_date" => $request->birth_date,
                "nationality" => $request->nationality,
                "role" => $request->role
            ];

            // Lưu danh sách ID diễn viên mới đã thêm
            $newActorIds = [];

            // Duyệt qua từng diễn viên
            for ($i = 0; $i < count($dataActors['name_actor']); $i++) {
                // Kiểm tra xem có ít nhất một trường không rỗng
                if (
                    !empty($dataActors['name_actor'][$i]) ||
                    !empty($dataActors['birth_date'][$i]) ||
                    !empty($dataActors['nationality'][$i]) ||
                    !empty($dataActors['role'][$i])
                ) {

                    // Tạo hoặc lấy diễn viên
                    $actor = Actor::firstOrCreate(
                        ['name' => $dataActors['name_actor'][$i]], // Kiểm tra diễn viên đã tồn tại không
                        [
                            'birth_date' => $dataActors['birth_date'][$i],
                            'nationality' => $dataActors['nationality'][$i],
                        ]
                    );

                    // Thêm vào bảng movie_actor
                    $movie->actors()->attach($actor->id, [
                        'role' => $dataActors['role'][$i],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);

                    // Lưu ID diễn viên mới
                    $newActorIds[] = $actor->id;
                }
            }
        }

        // dd($newActorIds);

        // Cập nhật và xóa diễn viên đã chọn
        $actors = $request->actors; // Mảng ID diễn viên
        $role_actor_chooses = $request->role_actor_chooses; // Mảng vai trò tương ứng
        $currentActors = $movie->actors->pluck('id')->toArray();

        // Xử lý các diễn viên đã chọn
        if (!empty($actors)) {

            foreach ($currentActors as $actorId) {
                // Nếu diễn viên không còn được chọn, xóa khỏi bảng trung gian
                if (!in_array($actorId, $actors) && !in_array($actorId, $newActorIds)) {
                    $movie->actors()->detach($actorId);
                } else {
                    // Nếu diễn viên còn được chọn, kiểm tra vai trò
                    if (isset($role_actor_chooses[$actorId]) && !empty($role_actor_chooses[$actorId])) {
                        // Cập nhật vai trò nếu có sự thay đổi
                        $movie->actors()->updateExistingPivot($actorId, [
                            'role' => $role_actor_chooses[$actorId],
                            'updated_at' => now() // Cập nhật thời gian
                        ]);
                    }
                }
            }

            // Thêm các diễn viên mới
            foreach ($actors as $actorId) {
                if (!in_array($actorId, $currentActors) && !in_array($actorId, $newActorIds)) {
                    // Kiểm tra nếu vai trò tương ứng với diễn viên đã được nhập
                    if (isset($role_actor_chooses[$actorId]) && !empty($role_actor_chooses[$actorId])) {
                        // Thêm diễn viên vào bảng trung gian với vai trò
                        $movie->actors()->attach($actorId, [
                            'role' => $role_actor_chooses[$actorId],
                            'created_at' => now(), // Thời gian hiện tại
                            'updated_at' => now()  // Thời gian hiện tại
                        ]);
                    }
                }
            }
        }





        return $movie->update($dataUpdated);
    }
    public function genreOfMovie($id)
    {
        return $this->movieRepository->genreOfMovie($id);
    }

    public function getListGenre()
    {
        return $this->genreRepository->getListGenre();
    }
    public function listMovies($request)
    {
        return $this->movieRepository->listMovies($request);
    }
    public function store($request)
    {
        $data = [
            'title' => $request->title,
            'slug' => $request->slug,
            'director' => $request->director,
            'duration' => $request->duration,
            'age' => $request->age,
            'format' => $request->format,
            'release_date' => $request->release_date,
            'premiere_date' => $request->premiere_date,
            'country' => $request->country,
            'trailer_url' => $request->trailer_url,
            'language' => $request->language,
            'description' => $request->description,
            'content' => $request->content,
            'order' => $request->order,
            'active' => $request->active,
            'hot' => $request->hot ? 1 : 0,
        ];


        $uploadData = $this->storageTraitUpload($request, 'image', 'public/movies');
        if ($uploadData) {
            $data['image'] = $uploadData['path'];
        }

        $uploadBanner = $this->storageTraitUpload($request, 'banner_movie', 'public/movies');
        if ($uploadBanner) {
            $data['banner_movie'] = $uploadBanner['path'];
        }

        $movieCreated =  $this->movie->create($data);

        if (!empty($request->parent_id)) {
            foreach ($request->parent_id as $key => $value) {
                $this->movieGenre->create([
                    'movie_id' => $movieCreated->id,
                    'genre_id' => $value
                ]);
            }
        }


        if (!empty($request->name_actor) || !empty($request->birth_date) || !empty($request->nationality) || !empty($request->role)) {
            $dataActors = [
                "name_actor" => $request->name_actor,
                "birth_date" => $request->birth_date,
                "nationality" => $request->nationality,
                "role" => $request->role
            ];

            // Duyệt qua từng diễn viên
            for ($i = 0; $i < count($dataActors['name_actor']); $i++) {
                // Kiểm tra xem có ít nhất một trường không rỗng
                if (
                    !empty($dataActors['name_actor'][$i]) ||
                    !empty($dataActors['birth_date'][$i]) ||
                    !empty($dataActors['nationality'][$i]) ||
                    !empty($dataActors['role'][$i])
                ) {

                    // Tạo hoặc lấy diễn viên
                    $actor = Actor::firstOrCreate(
                        ['name' => $dataActors['name_actor'][$i]], // Kiểm tra diễn viên đã tồn tại không
                        [
                            'birth_date' => $dataActors['birth_date'][$i],
                            'nationality' => $dataActors['nationality'][$i],
                        ]
                    );

                    // Thêm vào bảng movie_actor
                    $movieCreated->actors()->attach($actor->id, [
                        'role' => $dataActors['role'][$i],
                        'created_at' => now(),
                        'updated_at' => now(),
                    ]);
                }
            }
        }

        $actors = $request->actors; // Mảng ID diễn viên
        $role_actor_chooses = $request->role_actor_chooses; // Mảng vai trò tương ứng

        if (!empty($actors)) {
            foreach ($actors as $actorId) {
                // Kiểm tra nếu vai trò tương ứng với diễn viên đã được nhập
                if (isset($role_actor_chooses[$actorId]) && !empty($role_actor_chooses[$actorId])) {
                    // Thêm diễn viên vào bảng trung gian với vai trò
                    $movieCreated->actors()->attach($actorId, [
                        'role' => $role_actor_chooses[$actorId],
                        'created_at' => now(), // Thời gian hiện tại
                        'updated_at' => now()  // Thời gian hiện tại
                    ]);
                }
            }
        }
    }
    public function deleteMultipleChecked($request)
    {
        if (count($request->selectedIds) > 0) {

            foreach ($request->selectedIds as $id) {
                $this->movieRepository->delete($id);
            }

            return true;
        }
    }
}
