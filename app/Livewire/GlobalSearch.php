<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class GlobalSearch extends Component
{
    use WithPagination;

    public $query = "";


   
    
    public function render()
    {   
       

        if($this->query) {
            $articles = Article::search($this->query)->where('status',true)->paginate(4);
        } else{
            $articles= null;
        }
 
 
        return view('livewire.global-search',compact('articles'));
    }
}
