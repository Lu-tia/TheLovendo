<?php

namespace App\Http\Controllers;

use App\Models\WishlistUser;
use App\Models\Article;
use App\Models\User;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = User::find(auth()->user()->id)->wishlists;
        $wishlists->load('article');
        return view('wishlist.index', compact('wishlists'));
    }

}
