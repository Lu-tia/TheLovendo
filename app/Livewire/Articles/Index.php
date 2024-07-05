<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
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

  
    public function render($id = null)
    {
        $articles =  Article::orderBy('created_at', 'desc')
        ->when($this->filteredByCategory > 0, fn(Builder $query) => $query->where('category_id', $this->filteredByCategory))
        ->when($this->search !== '', fn(Builder $query) => $query->where('title','LIKE', '%'. $this->search . '%'))
        ->paginate(6);
        
        $iconClasses = [
            'Sport' => 'lni lni-basketball',
            'Motori' => 'lni lni-car-alt',
            'Elettronica' => 'lni lni-laptop-phone',
            'Abbigliamento' => 'lni lni-tag',
            'Salute e bellezza' => 'lni lni-spray',
            'Giocattoli' => 'lni lni-bus',
            'Animali domestici' => 'lni lni-bug',
            'Libri e riviste' => 'lni lni-book',
            'Accessori' => 'lni lni-hammer',
        ];
       
        $categories = Category::all();
        return view('livewire.articles.index',compact('articles','categories','id','iconClasses'));
    }
}
