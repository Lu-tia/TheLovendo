<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class GlobalSearch extends Component
{
    public $query = "";
    public $articles;

   
    
    public function render()
    {   
       

        if($this->query) {
            $this->articles = Article::search($this->query)->where('status',true)->get()->take(6);
        } else{
            $this->articles= null;
        }
 
 
        return view('livewire.global-search');
    }
}
