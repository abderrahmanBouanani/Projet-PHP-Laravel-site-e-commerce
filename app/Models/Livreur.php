<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Livreur extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'prenom', 'telephone'];

    public function livraisons()
    {
        return $this->hasMany(Livraison::class);
    }
}
