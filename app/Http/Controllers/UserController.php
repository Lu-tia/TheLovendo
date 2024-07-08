<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard(User $user)
    {   
        if($user->id == auth()->user()->id){
            return view('users.dashboard',compact('user'));
        } else {
            return redirect()->route('homepage');
        }
    }
    public function profile_settings(User $user)
    {   
        if($user->id == auth()->user()->id){
            return view('users.profile-settings',compact('user'));
        } else {
            return redirect()->route('homepage');
        }
    }
}
