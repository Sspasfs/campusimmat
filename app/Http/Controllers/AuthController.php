<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
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

        // Récupère l'utilisateur par email
        $user = User::where('email', $request->email)->first();

        // Vérifie l'utilisateur et le mot de passe
        if ($user && Hash::check($request->password, $user->password)) {
            // Authentification réussie, connecte l'utilisateur
            Auth::login($user);

            // Regénère la session pour éviter les attaques CSRF
            $request->session()->regenerate();

            // Redirige vers la page de bienvenue ou tableau de bord
            return redirect()->intended('welcome'); // Change "welcome" selon ta route souhaitée
        }

        // Authentification échouée, retourne avec une erreur
        return back()->withErrors([
            'email' => 'Adresse email ou mot de passe incorrect.',
        ])->onlyInput('email'); // Garde l'email saisi
    }

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
