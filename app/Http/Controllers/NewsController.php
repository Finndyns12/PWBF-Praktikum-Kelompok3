<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        return view('newss', [
            "title" => "News",
            "newss" => News::all()
        ]);
    }

    public function show($id)
    {
        return view('news',[
            "title" => "News",
            "newss" => News::find($id)
        ]);
    }
}
