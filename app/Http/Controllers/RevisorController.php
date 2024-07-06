<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {
        $article_to_check = Article::orderBy('created_at','asc')->where('status', null)->first();
        return view('revisor.index',compact('article_to_check'));
    }

    public function accept(Article $article)
    {
        $article->setAccepted(true);
        return redirect()->back()->with('message',"Hai accettato l'articolo $article->title");
    }
    public function reject(Article $article)
    {
        $article->setAccepted(false);
        return redirect()->back()->with('message',"Hai rifiutato l'articolo $article->title");
    }
    public function rollback(Article $article)
    {   
        $article = Article::orderBy('updated_at', 'desc')->first();
        $article->setAccepted(null);
        return redirect()->back()->with('rollback',"La modifica all'articolo $article->title è stata annullata");
    }
}
