<?php
namespace App\Http\Controllers;
Use Illuminate\Http\Request;

class CategoryNewsContoller extends Controller
{
    protected $CategoryNews = [
        'Категория 1',
        'Категория 2',
        'Категория 3'
    ];

    public function index()
    {
        return view('category.index', ['categoryNews' => $this->CategoryNews]);
    }
}
