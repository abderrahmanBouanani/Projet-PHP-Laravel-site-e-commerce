<?php

use App\Http\Controllers\SignupController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

//Routes pour le client
Route::get('/client_home', function () {
    return view('client-interface.index');
});

Route::get('/client_shop', function () {
    return view('client-interface.shop');
});

Route::get('/client_about', function () {
    return view('client-interface.about');
});

Route::get('/client_service', function () {
    return view('client-interface.services');
});

Route::get('/client_contact', function () {
    return view('client-interface.contact');
});

Route::get('/client_profile', function () {
    return view('client-interface.profilClient');
});

Route::get('/client_cart', function () {
    return view('client-interface.cart');
});

Route::get('/logout', function () {
    return view('welcome');
});

Route::get('/client/thankyou', function () {
    return view('client-interface.thankyou');
});

Route::get('/client/checkout', function () {
    return view('client-interface.checkout');
});

//Routes pour l'admin
Route::get('/admin_home', function () {
    return view('admin-interface.dashboard');
});

Route::get('/admin_commande', function () {
    return view('admin-interface.commandes');
});

Route::get('/admin_about', function () {
    return view('admin-interface.about');
});

Route::get('/admin_produit', function () {
    return view('admin-interface.produits');
});

Route::get('/admin_utilisateur', function () {
    return view('admin-interface.Utilisateur');
});

//Routes pour le vendeur

Route::get('/vendeur_home',function(){
    return view('vendeur-interface.vendeurHome');
});

Route::get('/vendeur_about',function(){
    return view('vendeur-interface.vendeurApropos');
});

Route::get('/vendeur_shop',function(){
    return view('vendeur-interface.vendeurBoutique');
});

Route::get('/vendeur_contact',function(){
    return view('vendeur-interface.vendeurContact');
});

Route::get('/vendeur_profile',function(){
    return view('vendeur-interface.vendeurProfile');
});

Route::get('/vendeur_service',function(){
    return view('vendeur-interface.vendeurService');
});

//Routes pour le livreur

Route::get('/livreur_livraison',function(){
    return view('delivery interface.livraisons');
});

Route::get('/livreur_profile',function(){
    return view('delivery interface.profil-livreur');
});