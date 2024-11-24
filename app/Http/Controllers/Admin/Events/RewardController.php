<?php

namespace App\Http\Controllers\Admin\Events;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RewardController extends Controller
{
    public function index()
    {
        return view('admin.pages.events.rewards.index');
    }

    public function create()
    {
        return view('admin.pages.events.rewards.create');
    }

    public function store()
    {
        
    }

    public function edit()
    {
        return view('admin.pages.events.rewards.edit');
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
