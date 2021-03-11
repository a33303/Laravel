<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Storage;

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

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required'
        ]);

        return redirect()->route('feedback.index');
    }

    public function getExport(Request $request)
    {
        $request->validate([
           'feedback' => ['name', 'email', 'password']
        ]);

        if (Storage::put('file.txt', var_export($request->except('_token'), true)));

        return redirect()->route('feedback.index');
    }
}
