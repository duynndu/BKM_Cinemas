<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Movies\MovieRequest;
use App\Models\Movie;
use App\Services\Admin\Actors\ActorService;
use App\Services\Admin\Genres\GenreService;
use App\Services\Admin\Movies\MovieService;
use App\Traits\RemoveImageTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class MovieController extends Controller
{
    use RemoveImageTrait;

    protected $movieService;

    protected $genreService;
    protected $actorService;


    public function __construct(
        MovieService     $movieService,
        GenreService      $genreService,
        ActorService      $actorService,
    ) {
        $this->movieService = $movieService;

        $this->genreService = $genreService;
        $this->actorService = $actorService;
    }

    public function index(Request $request)
    {
        $listGenre = $this->genreService->getListGenre();
        
        $listMovie = $this->movieService->listMovies($request);

        return view('admin.pages.movies.index', [
            'data' => $listMovie['listMovies'],
            'listGenre'=>$listGenre,
            'selectedGenre'=>$listMovie['genres']
        ]);
    }

    public function create()
    {
        $listGenre = $this->genreService->getListGenre();
        $actors = $this->actorService->getAll();
        return view('admin.pages.movies.create',compact('listGenre','actors'));
    }

    public function store(MovieRequest $request)
    {
      
        try {
            DB::beginTransaction();

            $this->movieService->store($request);

            DB::commit();

            $redirectUrl = route('admin.movies.index');

            return redirect($redirectUrl)->with([
                'status_succeed' => "Thêm phim thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi thêm');
        }
    }


    public function edit($id)
    {
        $movie = $this->movieService->getMovieById($id);
        $listGenre = $this->movieService->getListGenre();
        $cateData = $this->movieService->genreOfMovie($id);
        $actors = $this->actorService->getAll();
       
        if (!$movie) {
            return redirect()->route('admin.posts.index')->with([
                'status_failed' => "Không tìm thấy phim"
            ]);
        }

        return view('admin.pages.movies.edit', compact('movie','listGenre','cateData','actors'));
        
    }

    public function update(movieRequest $request, $id)
    {
        
        try {
            DB::beginTransaction();

            $this->movieService->update($request, $id);

            DB::commit();

            $redirectUrl = route('admin.movies.index');

            return redirect($redirectUrl)->with([
                'status_succeed' => "Cập nhật phim thành công"
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi cập nhật');
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $this->movieService->delete($id);

            DB::commit();

            $redirectUrl = route('admin.movies.index');

            return redirect($redirectUrl)->with([
                'status_succeed' => 'Xóa phim thành công'
            ]);
        } catch (\Exception $e) {
            DB::rollBack();

            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return back()->with('status_failed', 'Đã xảy ra lỗi khi xóa');
        }
    }

    public function removeAvatarImage(Request $request)
    {
        $movie = $this->removeImage($request, new Movie, 'image', 'movies');

        return response()->json(['image' => $movie]);
    }

    public function removeBannerImage(Request $request)
    {
        $movie = $this->removeImage($request, new Movie, 'banner_movie', 'movies');

        return response()->json(['banner_movie' => $movie]);
    }

    public function changeOrder(Request $request)
    {
        $this->movieService->changeOrder($request);

        return response()->json(['newOrder' => $request->order]);
    }

    public function changeHot(Request $request)
    {
        $item = $this->movieService->changeHot($request);

        return response()->json(['newHot' => $item->hot]);
    }

    public function changeActive(Request $request)
    {
        $item = $this->movieService->changeActive($request);

        return response()->json(['newStatus' => $item->active]);
    }

    public function deleteItemMultipleChecked(Request $request)
    {
        if (empty($request->selectedIds)) {
            return response()->json(['message' => 'Vui lòng chọn ít nhất 1 bản ghi'], 400); // Trả về mã lỗi 400
        }
        $this->movieService->deleteMultipleChecked($request);

        return response()->json(['message' => 'Xóa thành công!']);
    }
    
}
