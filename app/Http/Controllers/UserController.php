<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {   
        $user = auth()->user();
        return view('users.dashboard',compact('user'));
    }
}
