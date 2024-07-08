<?php

namespace App\View\Components\user;

use App\Models\Article;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class sidebar extends Component
{
    public $articles_to_check_count;

    public function __construct()
    {
        $this->articles_to_check_count = Article::where('status', null)->count();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.user.sidebar');
    }
}
