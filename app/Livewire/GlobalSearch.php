<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class GlobalSearch extends Component
{
    use WithPagination;

    public $query = "";
    public $articles ="";
    public $articlesCount = 0;


    
    public function render()
    {   
       

        if($this->query) {
            $this->articles = Article::search($this->query)->where('status',true)->get()->take(5);
            $this->articlesCount = count($this->articles); 
        } else{
            $this->articles= null;
            $this->articlesCount = 0;
        }
 
 
        return view('livewire.global-search',['articlesCount' => $this->articlesCount]);
    }
}
