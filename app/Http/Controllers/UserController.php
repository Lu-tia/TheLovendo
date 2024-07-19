<?php

namespace App\Http\Controllers;

use App\Http\Requests\users\UpdateProfileRequest;
use App\Models\Article;
use App\Models\Category;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {   
        return view('users.dashboard');
    }
    
    public function profile_settings()
    {   
        return view('users.profile-settings');
    }
    
    public function my_items()
    {   
        return view('users.my-items');
    }
    
    // Metodo per modificare l'annuncio
    public function editArticle(Article $article)
    {
        if ($article->user_id == auth()->user()->id) {
            if (auth()->user()->is_revisor || $article->status !== null) {
                $categories = Category::all();
                $nations = \Illuminate\Support\Facades\Http::get('https://restcountries.com/v3.1/all')->json();
                usort($nations, function($a, $b) {
                    return strcmp($a['name']['common'], $b['name']['common']);
                });
                
                return view('users.edit-article', compact('article', 'categories', 'nations'));
            } else {
                return redirect()->route('users.my_items')->with('error', 'Il tuo articolo è in fase di revisione');
            }
        } else {
            return redirect()->route('homepage')->with('error', 'Non hai i permessi per modificare questo annuncio');
        }
    }
    
    // Metodo per aggiornare l'annuncio
    public function updateArticle(Request $request, Article $article)
    {
        if ($article->user_id != auth()->user()->id) {
            return redirect()->route('homepage')->with('error', 'Non puoi modificare questo articolo');
        }
        
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'body' => 'required|string',
            'country' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'category_id' => 'required|integer|exists:categories,id',
        ]);
        
        $article->update($request->all());
        $article->status = null;
        $article->save();
        
        return redirect()->route('users.my_items')->with('success', 'Annuncio aggiornato con successo e in attesa di revisione');
    }
    
    // Metodo per eliminare l'annuncio
    public function destroyArticle(Article $article)
    {
        if ($article->user_id != auth()->user()->id) {
            return redirect()->route('homepage')->with('error', 'Non puoi eliminare questo articolo');
        }
        
        $article->delete();
        
        return redirect()->route('users.my_items')->with('success', 'Annuncio eliminato con successo');
    }

    /* Aggiornare profilo utente*/
    public function updateProfile(UpdateProfileRequest $request)
    {
        $path_image = '';
        if ($request->hasFile('image')) {
            $file_name = $request->file('image')->getClientOriginalName();
            $path_image = $request->file('image')->storeAs('public/img/users', $file_name);
        }

        $query = User::find(auth()->user()->id);
        $query->firstName = $request->firstName;
        $query->lastName = $request->lastName;
        if($path_image){
            $query->avatar = $path_image;
        }
        $query->save();

       
        session()->flash('success','Profilo aggioranto con successo');
        return redirect()->route('users.profile_settings');
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back()->with($lang);
    }
}
