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


   
    
    public function render()
    {   
       

        if($this->query) {
            $this->articles = Article::search($this->query)->where('status',true)->get()->take(5);
        } else{
            $this->articles= null;
        }
 
 
        return view('livewire.global-search');
    }
}
