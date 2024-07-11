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
        $whishlists = User::find(auth()->user()->id)->whishlists;
        $whishlists->load('article');
        return view('wishlist.index', compact('whishlists'));
    }

}
