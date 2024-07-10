<?php

namespace App\Livewire\Users;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Pagination\Paginator;

class MyItemsIndex extends Component
{
    use WithPagination;
    private $articles;
    public $query = 0;
    public $currentPage = 1;

    public function mount()
    {
        $this->articles = Auth::user()->articles()->orderBy('created_at', 'desc')->paginate(5);
        
    }
   
    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }

    public function render()
    {   
        if($this->query == 0){
            $this->articles = Auth::user()->articles()->orderBy('created_at', 'desc')->paginate(5);
        } else if($this->query == 1){
            $this->articles = Auth::user()->articles()->orderBy('created_at', 'desc')->where('status',true)->paginate(5);
        } else if ($this->query == 2){
            $this->articles = Auth::user()->articles()->orderBy('created_at', 'desc')->where('status',null)->paginate(5);
        }
        $articles = $this->articles;
        return view('livewire.users.my-items-index',compact('articles'));
    }
}
