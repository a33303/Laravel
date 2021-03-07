<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\FakeNewsService;
Use Illuminate\Http\Request;
Use Illuminate\Http\Response;

class NewsController extends Controller
{
    /**
     *@return \Illuminate\Http\Response
     *
     */
    public function index(Request $request)
    {
        $news = [];
        return view('admin.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('admin.news.add');
    }
}
