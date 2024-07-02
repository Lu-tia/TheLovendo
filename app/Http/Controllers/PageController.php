<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('homepage',compact('articles'));
    }
}
