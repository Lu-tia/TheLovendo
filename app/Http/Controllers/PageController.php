<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function homepage()
    {
        $nations = Http::get('https://restcountries.com/v3.1/all')->json();
        usort($nations, function($a, $b) {
            return strcmp($a['name']['common'], $b['name']['common']);
        });
        $categories = Category::all();
        $articles = Article::take(6)->orderBy('created_at', 'desc')->get();
        return view('homepage', compact('articles','categories','nations'));
    }
}
