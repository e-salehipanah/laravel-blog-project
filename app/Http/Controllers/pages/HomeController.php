<?php

namespace App\Http\Controllers\pages;

use App\Article;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $articles = Article::orderBy('id', 'desc')->get();
        return view('pages/home',compact('articles'));
    }
}
