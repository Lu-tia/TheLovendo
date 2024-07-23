<?php

namespace App\Livewire\Articles;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Http;
use Livewire\WithPagination;


class Index extends Component
{
    use WithPagination;
    
    public $categories;
    public $nations;
    public $filteredByCategory;
    public $filteredByNation;
    public $search = "";
    public $currentPage = 1;
    public $price;
    public $minPrice;
    public $maxPrice;

    public function mount(){
        $this->categories = Category::all();
        $this->nations = Http::get('https://restcountries.com/v3.1/all')->json();
        usort($this->nations, function($a, $b) {
            return strcmp($a['name']['common'], $b['name']['common']);
        });
        
    }


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
        ->when($this->filteredByNation !== null && $this->filteredByNation !== 'all', fn(Builder $query) => $query->where('country', $this->filteredByNation))
        ->when($this->price, fn(Builder $query) => $query->where('price', '<=', $this->price))
        ->where('status',true)
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
        $nations = $this->nations;
        $categories = $this->categories;
        $this->minPrice = Article::min('price');
        $this->maxPrice = Article::max('price');
        return view('livewire.articles.index',compact('articles','categories','id','iconClasses','nations'));
    }
}
