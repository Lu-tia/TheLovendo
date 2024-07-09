<?php

namespace App\Livewire\Users;

use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class MyItemsIndex extends Component
{
    use WithPagination;
    public $articles;
    public $btn = true;
    public $btnAccept = false;
    public $btnToAccept = false;

    public function mount()
    {
        $this->articles = Auth::user()->articles()->orderBy('created_at','desc')->get();
        
    }
    public function allArticles()
    {
        $this->btn = true;
        $this->btnToAccept = false;
        $this->btnAccept = false;
    }
    public function accepted()
    {
        $articles = Auth::user()->articles()->orderBy('created_at','desc')->where('status',true)->get();
        $this->btn = false;
        $this->btnToAccept = false;
        $this->btnAccept = true;
        return $this->articles = $articles;
    }
    public function to_accepted()
    {
        $articles = Auth::user()->articles()->orderBy('created_at','desc')->where('status',null)->get();
        $this->btn = false;
        $this->btnToAccept = true;
        $this->btnAccept = false;
        return $this->articles = $articles;
    }

    public function render()
    {   
        return view('livewire.users.my-items-index');
    }
}
