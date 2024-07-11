<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\WishlistUser;
use Livewire\Component;

class AddWhishlist extends Component
{

    public $article;


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
        return view('livewire.articles.add-whishlist');
    }
}
