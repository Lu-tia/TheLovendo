<?php

namespace App\Livewire\Users;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\WishlistUser;
use Livewire\Component;
use Illuminate\Pagination\Paginator;

class Wishlist extends Component
{
    use WithPagination;
    private $wishlist;
    public $currentPage = 1;

    public function setPage($url)
    {
        $this->currentPage = explode('page=', $url)[1];
        Paginator::currentPageResolver(function(){
            return $this->currentPage;
        });
    }

    public function destroy($article)
    {
        $whishlist = WishlistUser::where('article_id', $article);
        $whishlist->delete(); 
    }

    public function render()
    {
        $wishlists = User::find(auth()->user()->id)->wishlists()->paginate(5);
        $wishlists->load('article');
        
        return view('livewire.users.wishlist',compact('wishlists'));
    }
}
