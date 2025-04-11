<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Paypal extends Model
{
    use HasFactory;

    protected $fillable = ['paiement_id', 'email'];

    public function paiement()
    {
        return $this->belongsTo(Paiement::class);
    }
}
