<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $articles = Article::all();
        return view('homepage',compact('articles'));
    }
}
