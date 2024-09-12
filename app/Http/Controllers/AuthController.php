<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    // Affiche le formulaire de connexion
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // Gestion de la connexion
    public function login(Request $request)
    {
        // Validation des données de connexion
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Récupère l'utilisateur par email
        $user = User::where('email', $request->email)->first();

        // Vérifie l'utilisateur et le mot de passe
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentification réussie, connecte l'utilisateur
            Auth::login($user);

            // Regénère la session pour éviter les attaques CSRF
            $request->session()->regenerate();

            // Redirige vers la page de bienvenue ou tableau de bord
            return redirect()->intended('welcome'); // Modifie 'welcome' si une autre route est souhaitée
        } else {
            // Authentification échouée, retourne avec une erreur
            return back()->withErrors([
                'email' => 'Adresse email ou mot de passe incorrect.',
            ])->onlyInput('email'); // Garder l'email saisi
        }
    }

    // Gestion de la déconnexion
    public function logout(Request $request)
    {
        Auth::logout();

        // Invalide la session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirige vers la page de connexion
        return redirect()->route('auth.login');
    }
}
