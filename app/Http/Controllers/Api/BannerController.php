<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Traits\HandleImage;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    use HandleImage;

    public function __construct()
    {
//        $this->middleware('auth:api');
    }

    public function index()
    {
        $banners = Banner::with(['images'])->get();
        return response()->json($banners);
    }


    public function store(Request $request)
    {
        $existingDefaultBanner = Banner::where('status', 'draft')->with(['images'])->first();
        if ($existingDefaultBanner) {
            return response()->json($existingDefaultBanner);
        }
        $defaultBanner = new Banner([
            'status' => 'draft',
        ]);
        $defaultBanner->save();
        return response()->json($defaultBanner);
    }


    public function show($id)
    {
        $banner = Banner::with(['images'])->find($id);
        if (!$banner) {
            return response()->json(['error' => 'Banner not found'], 404);
        }
        return response()->json($banner);
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);
        if (!$banner) {
            return response()->json(['error' => 'Banner not found'], 404);
        }

        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);
        $banner->title = $request->input('title');
        $banner->description = $request->input('description');
        $banner->status = 'published';
        $banner->save();
        return response()->json($banner);
    }

    public function destroy($id)
    {
        $banner = Banner::find($id);
        if (!$banner) {
            return response()->json(['error' => 'Banner not found'], 404);
        }

        $this->deleteImages($banner->images);

        $banner->delete();

        return response()->json(['message' => 'Banner deleted successfully']);
    }

    public function getBannerActive()
    {
        $banner = Banner::where('is_active', 1)->with(['images'])->first();
        if (!$banner) {
            return response()->json(['error' => 'Banner không tồn tại'], 404);
        }
        return response()->json($banner);
    }

    public function uploadImageBanner(Banner $id, Request $request)
    {
        return $this->uploadImage($id, $request);
    }
}
