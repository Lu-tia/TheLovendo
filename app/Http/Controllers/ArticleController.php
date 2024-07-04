<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create()
    {
        return view('articles.create');
    }
    public function index($id = null)
    {
        return view('articles.index',compact('id'));
    }

    public function show(Article $article)
    {
        return view('articles.show',compact('article'));
    }
    public function flashpage()
    {
        return view('articles.flashpage');
    }
}
