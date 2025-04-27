<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Produit;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        // Vérifier si l'utilisateur est connecté via la session
        if (!session()->has('user')) {
            return response()->json(['error' => 'Non authentifié'], 401);
        }

        // Récupérer l'id de l'utilisateur de la session
        $userId = session('user.id');

        // Récupérer les informations du produit via l'ID
        $productId = $request->input('produit_id');
        $product = Produit::find($productId);

        // Vérifier si le produit existe
        if (!$product) {
            return response()->json(['error' => 'Produit introuvable'], 404);
        }

        // Récupérer le panier de la session
        $cart = session()->get('cart', []);

        // Vérifier si le produit est déjà dans le panier
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] += 1; // Incrémenter la quantité
        } else {
            // Ajouter le produit au panier
            $cart[$productId] = [
                'produit_id' => $product->id,
                'nom_produit' => $product->nom,
                'image' => $product->image,
                'prix' => $product->prix_unitaire,
                'quantity' => 1 // Initialiser la quantité
            ];
        }

        // Mettre à jour le panier dans la session
        session()->put('cart', $cart);

        return response()->json(['message' => 'Produit ajouté au panier']);
    }

    // Afficher le panier
    public function showCart()
    {
        $cart = session()->get('cart', []);
        return response()->json($cart);
    }
}
