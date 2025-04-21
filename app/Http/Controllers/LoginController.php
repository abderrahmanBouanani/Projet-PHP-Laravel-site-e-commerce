<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('welcome'); // resources/views/login.blade.php
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'motdepasse');

        // Cas spécial pour l'admin
        if ($credentials['email'] === 'admin@gmail.com' && $credentials['motdepasse'] === 'admin123') {
            session([
                'user' => [
                    'id' => 0, // Admin ID
                    'nom' => 'Admin',
                    'prenom' => 'Super',
                    'email' => $credentials['email'],
                    'telephone' => 'N/A',
                    'type' => 'admin'
                ]
            ]);
            return redirect('/admin_home');
        }

        // Vérifier dans la base de données
        $user = User::where('email', $credentials['email'])
                    ->where('password', $credentials['motdepasse']) // à remplacer par Hash::check() si mot de passe hashé
                    ->first();

        if ($user) {
            session([
                'user' => [
                    'id' => $user->id,
                    'nom' => $user->nom,
                    'prenom' => $user->prenom,
                    'email' => $user->email,
                    'telephone' => $user->telephone,
                    'type' => $user->type
                ]
            ]);

            switch (strtolower($user->type)) {
                case 'client':
                    return redirect('/client_home');
                case 'vendeur':
                    return redirect('/vendeur_home');
                case 'livreur':
                    return redirect('/livreur_livraison');
                default:
                    return back()->with('error', 'Type d’utilisateur inconnu.');
            }
        } else {
            return back()->with('error', 'Email ou mot de passe incorrect.');
        }      
    }
    
}
