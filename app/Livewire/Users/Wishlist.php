<?php

namespace App\Livewire\Users;

use App\Models\User;
use Livewire\Component;

class Wishlist extends Component
{
    public function render()
    {
        $wishlists = User::find(auth()->user()->id)->wishlists;
        $wishlists->load('article');
        return view('livewire.users.wishlist',compact('wishlists'));
    }
}
