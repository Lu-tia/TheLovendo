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
    public function index()
    {
        return view('articles.index');
    }

    public function show()
    {
        return view('articles.show');
    }
}
