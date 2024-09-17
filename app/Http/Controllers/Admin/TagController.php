<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\Tags\TagService;
use Illuminate\Http\Request;

class TagController extends Controller
{
    protected $tagService;
    public function __construct(
        TagService $tagService
    ) {
        $this->tagService = $tagService;
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
}
