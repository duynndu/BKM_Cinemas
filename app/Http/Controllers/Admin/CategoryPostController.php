<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Admin\CategoryPosts\CategoryPostService;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    protected $categoryService;
    public function __construct(
        CategoryPostService $categoryPostService
    ) {
        $this->categoryService = $categoryPostService;
    }
    public function index(Request $request){
    }
    public function create(){

    }
    public function store(Request $request){
    }
    public function edit($id){
    }
    public function update(Request $request, $id){
    }
     public function delete($id){
     }
    public function changeOrder(Request $request){
    }
    public function active(Request $request){
    }
}
