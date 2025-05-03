<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitController; // Ensure this controller exists in the specified namespace
use App\Models\Cart;
use App\Models\Produit;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Client\Request as ClientRequest;
use Illuminate\Http\Request as HttpRequest;

// ---connexion & signu--- 

// Afficher le formulaire de connexion
Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

// Gérer l'envoi du formulaire de connexion
Route::post('/login', [LoginController::class, 'authenticate']);

// Redirections post-login
Route::get('/client_home', function () {
    return view('client-interface.index');
});

// Afficher le formulaire d'inscription
Route::get('/signup', [SignupController::class, 'showSignupForm'])->name('signup');

// Soumettre le formulaire d'inscription
Route::post('/signup', [SignupController::class, 'create']);




//---vendeur---
// Gérer l'envoi du formulaire d'ajout du produit
Route::post('/produit', [ProduitController::class, 'store'])->name('vendeur.addProduct');
Route::delete('/vendeur_shop/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');



Route::get('/vendeur_shop', [ProduitController::class, 'index'])->name('vendeur.shop');


//chargement des produits
Route::get('/api/produits', [ProduitController::class, 'getProduits']);



//Ajouter au panier
Route::post('/api/cart/add', [CartController::class,'addToCart']);

//Codes promo
Route::post('/coupon/apply', [CouponController::class, 'applyCoupon']);

// Pour calculer les totaux
Route::get('/cart/total', [CartController::class, 'getCartTotal']);
// Pour récupérer les produits du panier
Route::get('/cart', [CartController::class, 'getCart']);

// Pour supprimer un produit du panier
Route::delete('/client_cart/remove/{id}', [CartController::class, 'removeCartItem'])->name('remove_from_cart');

// Route pour mettre à jour la quantité d'un produit dans le panier
Route::post('/cart/update/{id}', [CartController::class, 'updateCartItem']);



// Routes pour gérer les totaux du panier
Route::post('/api/cart/update-totals', [App\Http\Controllers\CartController::class, 'updateTotals']);
Route::get('/api/cart/get-totals', [App\Http\Controllers\CartController::class, 'getTotals']);
// Route pour créer une commande
Route::post('/api/orders/create', [App\Http\Controllers\OrderController::class, 'createOrder']);


















//Routes pour le client
Route::get('/client_home', function () {
    return view('client-interface.index', ['page' => 'ShopAll - Home']);
});

Route::get('/client_shop', function () {
    return view('client-interface.shop',['page' => 'ShopAll - Boutique']);
});

Route::get('/client_about', function () {
    return view('client-interface.about',['page' => 'ShopAll - A propos']);
});

Route::get('/client_service', function () {
    return view('client-interface.services',['page' => 'ShopAll - Services']);
});

Route::get('/client_contact', function () {
    return view('client-interface.contact',['page' => 'ShopAll - Contact']);
});

Route::get('/client_profile', function () {
    return view('client-interface.profilClient', ['user' => session('user')],['page' => 'ShopAll - Profile']);
});

Route::get('/client_cart', function () {
    return view('client-interface.cart',['page' => 'ShopAll - Panier']);
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/client/thankyou', function () {
    return view('client-interface.thankyou',['page' => 'ShopAll - Thank you']);
});

Route::get('/client/checkout', function () {
    return view('client-interface.checkout',['page' => 'ShopAll - Checkout']);
});


//Routes pour l'admin
Route::get('/admin_home', function () {
    return view('admin-interface.dashboard',['page' => 'ShopAll - Tableau de Bord']);
});

Route::get('/admin_commande', function () {
    return view('admin-interface.commandes',['page' => 'ShopAll - Commandes']);
});

Route::get('/admin_about', function () {
    return view('admin-interface.about',['page' => 'ShopAll - Profil']);
});

Route::get('/admin_produit', function () {
    return view('admin-interface.produits',['page' => 'ShopAll - Produits']);
});

Route::get('/admin_utilisateur', function () {
    return view('admin-interface.Utilisateur',['page' => 'ShopAll - Utilisateurs']);
});

//Routes pour le vendeur

Route::get('/vendeur_home',function(){
    return view('vendeur-interface.vendeurHome',['page' => 'ShopAll - Home']);
});

Route::get('/vendeur_about',function(){
    return view('vendeur-interface.vendeurApropos',['page' => 'ShopAll - A propos']);
});


Route::get('/vendeur_contact',function(){
    return view('vendeur-interface.vendeurContact',['page' => 'ShopAll - Contact']);
});

Route::get('/vendeur_profile', function () {
    return view('vendeur-interface.vendeurProfile', ['user' => session('user')],['page' => 'ShopAll - Profile']);
});

Route::get('/vendeur_service',function(){
    return view('vendeur-interface.vendeurService',['page' => 'ShopAll - Services']);
});


//Routes pour le livreur

Route::get('/livreur_livraison',function(){
    return view('delivery interface.livraisons');
});

Route::get('/livreur_profile',function(){
    return view('delivery interface.profil-livreur',['user' => session('user')]);
});




