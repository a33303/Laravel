<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsCreateRequest;
use App\Http\Requests\NewsEditRequest;
use App\Models\News;
use App\Services\FakeNewsService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
Use Illuminate\Http\Request;
Use Illuminate\Http\Response;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * @return Application|Factory|View|Response
     */
    public function index()
    {
        $news = News::all();
        return view('admin.news.index', ['news' => $news]);
    }

    public function create()
    {
        return view('admin.news.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param NewsCreateRequest $request
     * @return Response
     */
    public function store(NewsCreateRequest $request): Response
    {

        $data = $request->validated();
        $data['slug']=Str::slug($data['title']);
        return response()->header();
    }

    /**
     * Display the specified resource.
     *
     * @param News $news
     * @return Application|Factory|View|Response
     */
    public function show(News $news)
    {
        return view('admin.news.categories.show', ['news' => $news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return Response
     */
    public function edit(int $id): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param NewsEditRequest $request
     * @param int $id
     * @return Response
     */
    public function update(NewsEditRequest $request, int $id): Response
    {
        $data = $request->validated();
        $data['slug']=Str::slug($data['title']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return Response
     */
    public function destroy(int $id): Response
    {
        //
    }
}
