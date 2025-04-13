<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livraison extends Model
{
    use HasFactory;

    protected $fillable = [
        'commande_id', 'livreur_id', 'nom_client',
        'prenom_client', 'adresse_client', 'statut'
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function livreur()
    {
        return $this->belongsTo(User::class, 'livreur_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }
}
