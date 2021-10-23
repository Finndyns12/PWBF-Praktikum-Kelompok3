<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('news', [
            "title" => "News",
            "news" => News::all()
        ]);
    }

    public function show($slug)
    {
        return view('news',[
            "title" => "News",
            "news" => News::find($slug)
        ]);
    }
}
