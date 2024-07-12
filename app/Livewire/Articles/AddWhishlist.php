<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\User;
use App\Models\WishlistUser;
use Livewire\Component;

class AddWhishlist extends Component
{

    public $article;
    public $query;

    public function store()
    {
        WishlistUser::Create([
            'user_id' => auth()->id(), 
            'article_id' => $this->article->id,
        ]);    
    }

    public function destroy($article)
    {   
            $whishlist = WishlistUser::where('article_id', $article);
            $whishlist->delete(); 
    }

    public function render()
    {
        if(auth()->user()){
            $wishlist = auth()->user()->wishlists->pluck('article_id')->toArray();
            return view('livewire.articles.add-whishlist',compact('wishlist'));
        }
         return view('livewire.articles.add-whishlist');
    }
}
