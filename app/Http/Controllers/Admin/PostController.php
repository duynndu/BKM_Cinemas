<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Posts\PostService;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $postService;
    public function __construct(
        PostService $postService
    ) {
        $this->postService = $postService;
    }
    public function index(Request $request) {}
    public function create() {}
    public function store(Request $request) {}
    public function edit($id) {}
    public function update(Request $request, $id) {}
    public function delete($id) {}
    public function changeOrder(Request $request) {}
    public function active(Request $request){
    }
    public function changeHot(Request $request){
    }
}
