<?php

namespace App\View\Components;

use App\Models\Article;
use App\Models\Category;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Navbar extends Component
{
    public $categories;
    public $articles_to_accept_count;

    public function __construct()
    {
        $this->categories = Category::all();
        $this->articles_to_accept_count = Article::where('status' ,null)->count();
    }
    
    /**
    * Get the view / contents that represent the component.
    */
    public function render(): View|Closure|string
    {
        return view('components.navbar');
    }
}
