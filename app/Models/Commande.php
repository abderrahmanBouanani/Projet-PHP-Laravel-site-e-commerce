<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'adresse'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class)->withPivot('quantite');
    }

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }

    public function paiements()
    {
        return $this->hasMany(Paiement::class);
    }
}
