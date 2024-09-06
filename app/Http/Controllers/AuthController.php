<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        // Validation des données de connexion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentative d'authentification
        $user = User::where('email', $request->mail)->first();

        if ($user && password_verify($request->password, $user->password)) {
            // Authentification réussie, connectez l'utilisateur
            auth()->login($user);

            // Rediriger l'utilisateur vers la page de bienvenue
            return redirect()->route('welcome');
        } else {
            // Authentification échouée, rediriger avec un message d'erreur
            return redirect()->route('auth.login')->with('error', 'Adresse email ou mot de passe incorrect.');
        }
    }

    public function logout(Request $request)
    {
        return redirect()->route('auth.login');
    }
}
