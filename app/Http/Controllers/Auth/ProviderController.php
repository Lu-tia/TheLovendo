<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class ProviderController extends Controller
{
    public function redirect($social){
        return Socialite::driver($social)->redirect();
    }

    public function callback($social){
        
        
        $socialUser = Socialite::driver($social)->user();
        
        if(!User::where('email',$socialUser->email)->first()){
            
            $user= User::create([
                'firstName' => $socialUser->user['given_name'],
                'lastName' => $socialUser->user['family_name'],
                'email' => $socialUser->email,
                'password' => Hash::make($socialUser->token),   
            ]);
            
        } else{
            $user = User::where('email',$socialUser->email)->first();
        }
        
        Auth::login($user);
        
        Provider::updateOrCreate([
            'email' => $socialUser->email,
        ], [
            'email' => $socialUser->email,
            'social_id' => $socialUser->id,
            'social_firstName' => $socialUser->user['given_name'],
            'social_lastName' => $socialUser->user['family_name'],
            'social_avatar' => $socialUser->avatar,
            'email' => $socialUser->email,
            'user_id' => $user->id
        ]);

        $user = User::find(auth()->user()->id);
        $user->avatar = auth()->user()->providers['0']->social_avatar;
        $user->save();
        
        
        return redirect('/');
        
    }
}
