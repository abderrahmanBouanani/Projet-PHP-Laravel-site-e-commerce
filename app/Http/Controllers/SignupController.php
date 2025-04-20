<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function showSignupForm()
    {
        return view('signup'); // Assure-toi que ton fichier HTML est bien placé dans resources/views/auth/signup.blade.php
    }

    // Gérer la soumission du formulaire d'inscription
    public function create(Request $request){
    
        $user = User::create([
            'nom' => $request->input('nom'),
            'prenom' => $request->input('prenom'),
            'email' => $request->input('email'),
            'password' => $request->input('motdepasse'),
            'telephone' => $request->input('telephone'),
            'type' => $request->input('type_utilisateur'),
        ]);
        

        // Rediriger vers la page de connexion ou autre
        return redirect('/')->with('success', 'Votre compte a été créé avec succès !');
}
}