<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Carte extends Model
{
    use HasFactory;

    protected $fillable = ['paiement_id', 'numero', 'nom', 'expiration', 'cvv'];

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
    }
}
