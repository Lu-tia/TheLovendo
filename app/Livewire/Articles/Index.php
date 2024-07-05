<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Pagination\Paginator;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;
    
    public $filteredByCategory;
    public $search = "";
    public $currentPage = 1;

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }

  
    public function createFilter()
    {
        return Article::orderBy('created_at', 'desc')->paginate(6);
    }

    public function categoryFilter()
    {
        return Article::where('category_id', $this->filteredByCategory)->paginate(6);
        $this->setPage(1);
    }
    public function render($id = null)
    {
       if(!$this->filteredByCategory || $this->filteredByCategory == 'AllCategories'){
                $articles = $this->createFilter();
       } else {
                $articles = $this->categoryFilter();
       }
        $categories = Category::all();
        return view('livewire.articles.index',compact('articles','categories','id'));
    }
}
