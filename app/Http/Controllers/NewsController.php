<?php

namespace App\Http\Controllers;
Use Illuminate\Http\Request;

class NewsController extends Controller
{
    protected $ListNews = [
        'Новость 1',
        'Новость 2',
        'Новость 3',
        'Новость 4',
        'Новость 5',
        'Новость 6'
    ];
    public function index()
    {
        if (isset($_GET['title']) && isset($_GET['text'])) {
            $this->ListNews[] = $_GET['title'];
//            array_push($this->ListNews, $_GET['title']);
        }

        return view('news.index', ['listNews' => $this->ListNews]);
    }

    public function show(int $id)
    {
        $news = $this->ListNews[$id] ?? "Not found";
        return view('news.show', ['news' => $news]);
    }

   /* public function category()
    {
        return view('news.category'. ['CategoryNews' =>$this->CategoryNews]);
    }*/

    public function create()
    {
        return view('news.create');
    }
}

