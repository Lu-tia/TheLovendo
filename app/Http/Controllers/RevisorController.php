<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class RevisorController extends Controller
{
    public function index()
    {
        // Recupera il primo articolo da revisionare, escludendo quelli creati dal revisore autenticato
        $article_to_check = Article::orderBy('created_at', 'asc')
        ->where('status', null)
        ->where('user_id', '!=', auth()->user()->id)
        ->first();
        
        return view('revisor.index', compact('article_to_check'));
    }
    
    public function accept(Article $article)
    {
        $article->status = true;
        $article->save();
        
        session()->flash('message', "Hai accettato l'articolo $article->title");
        return redirect()->route('revisor.index');
    }
    
    public function reject(Article $article)
    {
        $article->status = false;
        $article->save();
        
        session()->flash('message', "Hai rifiutato l'articolo $article->title");
        return redirect()->route('revisor.index');
    }
    
    public function rollback(Article $article)
    {
        // Recupera l'ultimo articolo modificato (rollback dell'ultimo aggiornamento)
        $article = Article::orderBy('updated_at', 'desc')->first();
        
        $article->status = null;
        $article->save();
        
        session()->flash('rollback', "La modifica all'articolo $article->title è stata annullata");
        return redirect()->route('revisor.index');
    }
}

