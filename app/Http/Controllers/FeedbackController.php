<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\FeedbackCreateRequest;
use App\Http\Requests\FeedbackExportRequest;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class FeedbackController extends Controller
{

    public function index()
    {
        $feedback = [];
        return view('feedback.index', ['feedback' => $feedback]);
    }

    public function create()
    {
        return view('feedback.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FeedbackCreateRequest $request
     * @return Response
     */
    public function store(FeedbackCreateRequest $request): Response
    {
        $data = $request->validated();
        $data['slug']=Str::slug($data['title']);

        return redirect()->route('feedback.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param FeedbackExportRequest $request
     * @return Response
     */
    public function getExport(FeedbackExportRequest $request): Response
    {
        $data = $request->validated();
        $data['slug']=Str::slug($data['title']);

        if (Storage::put('file.txt', var_export($request->except('_token'), true)));

        return redirect()->route('feedback.index');
    }
}
