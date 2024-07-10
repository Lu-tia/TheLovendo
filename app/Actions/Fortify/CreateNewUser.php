<?php

namespace App\Actions\Fortify;

use App\Models\Provider;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravolt\Avatar\Facade as Avatar;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();
        // Generazione delle iniziali
        $initials = strtoupper(substr($input['firstName'], 0, 1) . substr($input['lastName'], 0, 1));
          // Creazione dell'avatar
          $avatar = Avatar::create($initials)->getImageObject()->encode('png');
          $avatarPath = 'avatars/' . uniqid() . '.png';
          Storage::disk('public')->put($avatarPath, $avatar);
      
        return User::create([
            'firstName' => $input['firstName'],
            'lastName' => $input['lastName'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'avatar' => $avatarPath,
        ]);
        
    }
   
}
