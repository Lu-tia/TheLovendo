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
        $categories = Category::all();
        $articles = Article::orderBy('created_at', 'desc')->paginate(6);
        return view('articles.index', compact('articles','categories'));
    }

    public function show()
    {
        return view('articles.show');
    }
}
