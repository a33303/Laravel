<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryEditRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use function Illuminate\Events\queueable;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $categories = Category::with('newsTmp')->get();
        ($categories->map(function ($category){
            return [
              'id' => $category->id,
              'categoryTitle' => $category->title,
              'news' => $category->newsTm->map(function($news){
                  return [
                    'id' => $news->id,
                    'title' => $news->title
                  ];
              })
            ];
        }));
        $categories = Category::select('id', 'title', 'description', 'created-at')
            ->with('news')
            ->orderBy('id', 'asc')
            ->paginate(5);


        return view('admin.news.categories.index', [
            'categories' => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('admin.news.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CategoryCreateRequest $request
     * @return Response
     */
    public function store(CategoryCreateRequest $request): Response
    {
        $data = $request->validated();
        $data['slug']=Str::slug($data['title']);

        $create = Category::create($data);
        if($create){
            return redirect()->route('admin.categories.index')->with('success', 'Запись успешно добавлена');
        }

        return back()->withInput()->with('errors', 'Не удалось добавить запись');

    }

    /**
     * Display the specified resource.
     *
     * @param Category $category
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function show(Category $category)
    {
        return view('admin.news.categories.show', ['category' => $category]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Category $category
     * @return Response
     */
    public function edit(Category $category): Response
    {
        return view('admin.news.categories.index', [
            'category' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param CategoryEditRequest $request
     * @param Category $category
     * @return Response
     */
    public function update(CategoryEditRequest $request, Category $category): Response
    {

        $data = $request->validated();
        $data['slug']=Str::slug($data['title']);
        $save = $category->fill($data)->save();
        if($save){
            return redirect()->route('admin.categories.index')->with('success', 'Запись успешно обновилась');
        }

        return back()->withInput()->with('errors', 'Не удалось обновить запись');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Category $category
     * @return Response
     */
    public function destroy(Category $category): Response
    {
        //
    }
}
