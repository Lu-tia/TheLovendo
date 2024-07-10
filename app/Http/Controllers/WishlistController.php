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
    $wishlists->load('article', 'user');
    return view('wishlist.index', compact('wishlists'));
}
    
    public function store(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
        ]);
        
        $wishlist = WishlistUser::firstOrCreate(
            ['user_id' => auth()->id(), 'article_id' => $request->article_id],
            ['quantity' => 0]
        );
        
        $wishlist->quantity += 1;
        $wishlist->save();
        
        return redirect()->route('wishlist.index')->with('success', 'Article added to wishlist');
    }
    
    public function update(Request $request, WishlistUser $wishlist)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1',
        ]);
        
        if ($wishlist->user_id == auth()->id()) {
            $wishlist->update(['quantity' => $request->quantity]);
            return redirect()->back()->with('success', 'Wishlist updated successfully');
        }
        
        return redirect()->back()->with('error', 'Unauthorized action');
    }
    
    public function destroy(WishlistUser $wishlist)
    {
        if ($wishlist->user_id == auth()->id()) {
            $wishlist->delete();
            return redirect()->back()->with('success', 'Article removed from wishlist');
        }
        
        return redirect()->back()->with('error', 'Unauthorized action');
    }
}
