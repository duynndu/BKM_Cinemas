<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\EmailSubscribe\EmailSubscribeRequest;
use App\Services\Client\Home\Interfaces\HomeServiceInterface;
use App\Services\Client\Posts\Interface\PostServiceInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    protected $homeService;
    protected $postService;

    public function __construct(
        HomeServiceInterface $homeService,
        PostServiceInterface $postService,
    ) {
        $this->homeService = $homeService;
        $this->postService = $postService;
    }

    public function index()
    {
        // dd(\Hash::make(1)); 
        $sliders = $this->homeService->sliders();
        $movieIsShowing = $this->homeService->movieIsShowing();
        $upComingMovie = $this->homeService->upcomingMovie();
        $postPromotion = $this->postService->getPostByCategory('khuyen-mai');
        $postReviews = $this->postService->getPostByCategory('danh-gia-phim')->chunk(2);

        return view('client.pages.home', [
            'sliders' => $sliders,
            'movieIsShowing' => $movieIsShowing,
            'upComingMovie' => $upComingMovie,
            'postPromotion' => $postPromotion,
            'postReviews' => $postReviews,
        ]);
    }
    public function emailSubscribe(EmailSubscribeRequest $request)
    {
        try {
            DB::beginTransaction();

           $result = $this->homeService->emailSubscribe($request);

            DB::commit();
            return response()->json(['result' => $result], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Message: ' . $e->getMessage() . ' ---Line: ' . $e->getLine());

            return response()->json([
                'success' => false,
                'message' => 'Có lỗi xảy ra!',
            ], 500);
        }
    }
}
