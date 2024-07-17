<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Provider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;

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

            // Ottieni i contenuti dell'immagine dall'URL
            $imageContents = file_get_contents($socialUser->avatar);

            // Genera un nome univoco per l'immagine
            $imageName = Str::random(10) . '.jpg';

             // Specifica il percorso dove vuoi salvare l'immagine
            $path = 'public/users/profile' . $imageName;
            Storage::put($path, $imageContents);

        $user = User::find(auth()->user()->id);
        $user->avatar = $path;
        $user->save();
        
        
        return redirect('/');
        
    }
}
