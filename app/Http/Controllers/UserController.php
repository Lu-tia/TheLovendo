<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function dashboard()
    {   
        return view('users.dashboard');
    }
    public function profile_settings()
    {   
         return view('users.profile-settings');
    }
    public function my_items()
    {   
        return view('users.my-items');
    }
}
