<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => $this->passwordRules(),
            'avatar' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'], // Avatar optionnel
            ])->validate();

            
         // Gestion de l'avatar
         $avatarPath = null;
         if (isset($input['avatar']) && $input['avatar']->isValid()) {
             // Stocker l'image dans le dossier storage/app/avatars
             $avatarPath = $input['avatar']->store('avatars', 'local'); // Chemin de stockage
         }    
           
        
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'avatar' => $avatarPath, // Enregistrer le chemin de l'avatar dans la base de données 
            'role' => 'user',            
            
        ]);
    }
}