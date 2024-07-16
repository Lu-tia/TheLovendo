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
        if ($article->user_id == auth()->user()->id) {
            return redirect()->route('revisor.index')->with('error', 'Non puoi accettare un annuncio che hai creato tu stesso');
        }
        
        $article->status = 1;
        $article->save();
        
        return redirect()->route('revisor.index')->with('success', 'Annuncio accettato con successo');
    }
    
    public function reject(Article $article)
    {
        if ($article->user_id == auth()->user()->id) {
            return redirect()->route('revisor.index')->with('error', 'Non puoi rifiutare un annuncio che hai creato tu stesso');
        }
        
        $article->status = 'rejected';
        $article->save();
        
        return redirect()->back()->with('message', "Hai rifiutato l'articolo $article->title");
    }
    
    public function rollback(Article $article)
    {
        // Recupera l'ultimo articolo modificato (rollback dell'ultimo aggiornamento)
        $article = Article::orderBy('updated_at', 'desc')->first();
        
        if ($article->user_id == auth()->user()->id) {
            return redirect()->route('revisor.index')->with('error', 'Non puoi annullare la modifica di un annuncio che hai creato tu stesso');
        }
        
        $article->status = null;
        $article->save();
        
        return redirect()->back()->with('rollback', "La modifica all'articolo $article->title è stata annullata");
    }
}

