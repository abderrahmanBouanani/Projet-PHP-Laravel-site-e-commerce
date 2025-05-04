<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    /**
     * Affiche la liste des utilisateurs
     */
    public function index(Request $request)
    {
        $userType = $request->query('type');
        
        $query = User::query();
        
        // Filtrer par type si spécifié
        if ($userType) {
            $query->where('type', $userType);
        }
        
        $users = $query->get();
        
        $pageTitle = 'ShopAll - Utilisateurs';
        $cardTitle = 'Utilisateurs';
        
        if ($userType === 'client') {
            $pageTitle = 'ShopAll - Clients';
            $cardTitle = 'Clients';
        } else if ($userType === 'vendeur') {
            $pageTitle = 'ShopAll - Vendeurs';
            $cardTitle = 'Vendeurs';
        }
        
        return view('admin-interface.Utilisateur', [
            'page' => $pageTitle,
            'cardTitle' => $cardTitle,
            'users' => $users,
            'userType' => $userType
        ]);
    }
    
    /**
     * Affiche les détails d'un utilisateur spécifique
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        
        return view('admin-interface.user-details', [
            'page' => 'ShopAll - Détails utilisateur',
            'user' => $user
        ]);
    }
    
    /**
     * Supprime un utilisateur
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        
        return redirect()->back()->with('success', 'Utilisateur supprimé avec succès');
    }
}
