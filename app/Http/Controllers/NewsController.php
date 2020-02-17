<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show(Request $request, News $news)
    {
        return $news;
    }
}