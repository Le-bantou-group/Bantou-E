<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use Illuminate\Cache\RateLimiting\Limit;
//use App\Models\User;
use Illuminate\Http\Request;
//use Illuminate\Validation\Rules;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;
//use Illuminate\Support\Facades\Storage;

class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for('login', function (Request $request) {
            $throttleKey = Str::transliterate(Str::lower($request->input(Fortify::username())).'|'.$request->ip());

            return Limit::perMinute(5)->by($throttleKey);
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::loginView(function () {
            return view('auth.login');
        });

        Fortify::registerView(function () {
            return view('auth.register');

        });

        Fortify::requestPasswordResetLinkView(function () {
            return view('auth.forgot-password');
        });

        Fortify::resetPasswordView(function (Request $request) {
            return view('auth.reset-password', ['request' => $request]);
        });

        // Créer un utilisateur avec gestion d'avatar
        /*Fortify::createUsersUsing(function (array $input) {
            // Validation des données
            Validator::make($input, [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'avatar' => ['nullable', 'image', 'mimes:jpg,jpeg,png', 'max:2048'], // Validation pour avatar
            ])->validate();

            // Gestion du fichier d'avatar (si fourni)
            if (isset($input['avatar'])) {
                $avatarPath = $input['avatar']->store('avatars', 'public'); // Sauvegarde de l'avatar
            }

            // Création de l'utilisateur
            return User::create([
                'name' => $input['name'],
                'email' => $input['email'],
                'email_verified_at' => $input['email'],
                'password' => Hash::make($input['password']),
                'avatar' => isset($avatarPath) ? $avatarPath : null, // Sauvegarder le chemin de l'avatar
            ]);
        });*/
    }
}