<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/signup', function () {
    return view('signup');
});

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