<?php

namespace App\Livewire\Articles;

use App\Models\WishlistUser;
use Livewire\Component;

class AddWhishlist extends Component
{

    public $article;


    public function store()
    {

        WishlistUser::Create([
            'user_id' => auth()->id(), 
            'article_id' => $this->article,
        ]);

        
    }

    public function render()
    {
        return view('livewire.articles.add-whishlist');
    }
}
