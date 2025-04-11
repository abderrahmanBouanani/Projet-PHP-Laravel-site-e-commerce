<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = ['commande_id', 'montant', 'type'];

    public function commande()
    {
        return $this->belongsTo(Commande::class);
    }

    public function carte()
    {
        return $this->hasOne(Carte::class);
    }

    public function paypal()
    {
        return $this->hasOne(Paypal::class);
    }

    public function facturation()
    {
        return $this->hasOne(Facturation::class);
    }
}
