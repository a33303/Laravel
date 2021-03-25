<?php

namespace App\Http\Controllers;
use App\Models\News;
use App\Models\NewsTmp;
use App\Services\FakeNewsService;
Use Illuminate\Http\Request;

class NewsController extends Controller
{

    /**
     * @var array
     */
    private $listNews;

    public function index(FakeNewsService $service)
    {
        $newsTmp = NewsTmp::with('category')->get();
        return view('news.index', [
            'listNews' => $newsTmp->getNews()
        ]);
    }

    public function show(News $news)
    {
       return view('admin.news.index', ['News' => $news]);

    }

    public function create()
    {
        return view('admin.news.create');
    }
}

