<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //以下を追記
    public function add()
    {
        return view('admin.news.create');
    }
}
