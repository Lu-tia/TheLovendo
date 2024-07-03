<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function homepage()
    {
        $categories = Category::all();
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('articles','categories'));
    }
}
