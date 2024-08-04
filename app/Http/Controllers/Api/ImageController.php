<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Middleware\DelayResponseMiddleware;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    public function __construct()
    {
        $this->middleware(DelayResponseMiddleware::class);
    }

    public function deleteImageByUrl(Request $request)
    {
        $request->validate([
            'url' => 'required|string',
        ]);

        $url = $request->input('url');
        $image = Image::where('url', $url)->first();
        if (!$image) {
            return response()->json(['error' => 'Image not found']);
        }
        try {
            Storage::delete('/public/' . basename($url));
            $image->delete();
            return response()->json([
                'message' => 'Image deleted successfully',
                'success' => true
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'error' => 'Failed to delete image'
            ]);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'imageable_type' => 'nullable|string',
            'imageable_id' => 'nullable|integer',
        ]);
        $image = $request->file('file');
        $imageableType = $request->input('imageable_type');
        $imageableId = $request->input('imageable_id');

        $filename = time() . '.' . $image->getClientOriginalExtension();
        $path = $image->storeAs('', $filename, 'public');
        $url = asset('storage/' . $path);

        if ($imageableId && $imageableId) {
            Image::create([
                'url' => $url,
                'imageable_id' => $imageableId,
                'imageable_type' => "App\Models\\$imageableType",
            ]);
        }

        return response()->json(['url' => $url], 201);
    }
}
