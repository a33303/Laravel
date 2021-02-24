<?php

namespace App\Http\Controllers;
use App\Services\FakeNewsService;
Use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function index()
    {
        $listNews = (new FakeNewsService())->getNews();

        if (isset($_GET['title']) && isset($_GET['text'])) {
            $this->listNews[] = $_GET['title'];
//            array_push($this->ListNews, $_GET['title']);
        }

        return view('news.index', ['listNews' => $listNews]);
    }

    public function show(FakeNewsService $service, int $id)
    {
        $allNews = $service->getNews();
        $news = $allNews[$id] ?? "Not found";
        return view('news.show', ['news' => $news]);

       /* $news = $this->ListNews[$id] ?? "Not found";
        return view('news.show', ['news' => $news]);*/
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

