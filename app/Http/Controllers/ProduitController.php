<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the products.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {        
        $produits = Produit::where('vendeur_id', session('user')['id'])->get();
        return view('vendeur-interface.vendeurBoutique', compact('produits'));
    }

    /**
     * Store a newly created product in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Vérifier que l'utilisateur est connecté et est un vendeur
        if (!session('user') || session('user')['type'] !== 'vendeur') {
            return redirect()->back()->with('error', 'Accès non autorisé.');
        }

        // Validate the request data
        $request->validate([
            'nom' => 'required|string|max:255',
            'prix_unitaire' => 'required|numeric',
            'categorie' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp,bmp|max:2048'
        ]);

        // Create a new product instance
        $produit = new Produit();
        $produit->nom = $request->input('nom');  // Changé de 'product_name' à 'nom'
        $produit->prix_unitaire = $request->input('prix_unitaire');  // Changé de 'product_price' à 'prix_unitaire'
        $produit->categorie = $request->input('categorie');  // Changé de 'product_category' à 'categorie'

        // Handle the image upload if present
        if ($request->hasFile('image')) {
            $produit->image = file_get_contents($request->file('image')->getRealPath());  // Changé de 'product-image' à 'image'
        }

        // Save the product to the database
        $produit->vendeur_id = session('user')['id'];
        $produit->save();

        return redirect()->back()->with('success', 'Produit ajouté avec succès !');
    }
}
