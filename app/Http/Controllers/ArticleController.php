<?php

namespace App\Http\Controllers;


use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(User $user)
    {
        if($user->id == auth()->user()->id){
            return view('articles.create',compact('user'));
        } else {
            return redirect()->route('homepage');
        }
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
