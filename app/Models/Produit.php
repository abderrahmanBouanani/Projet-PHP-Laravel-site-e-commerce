<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prix_unitaire', 'categorie', 'description'];

    public function vendeurs()
    {
        return $this->belongsToMany(Vendeur::class);
    }

    public function commandes()
    {
        return $this->belongsToMany(Commande::class)->withPivot('quantite');
    }
}
