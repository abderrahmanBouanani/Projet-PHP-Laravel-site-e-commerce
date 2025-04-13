<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

class User extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'nom', 'prenom', 'email', 'password', 'type'
    ];

    protected $hidden = [
        'mot_de_passe', 'remember_token',
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class, 'vendeur_id');
    }

    public function commandes()
    {
        return $this->hasMany(Commande::class, 'client_id');
    }

    public function livraisons()
    {
        return $this->hasMany(Livraison::class, 'livreur_id');
    }
}
