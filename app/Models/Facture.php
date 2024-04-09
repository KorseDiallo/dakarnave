<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facture extends Model
{
    use HasFactory;
    
    protected $guarded=['id'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($facture) {
            // Récupérer la date et l'heure actuelle
            $dateHeure = now()->format('YmdHis');

            // Définir la date et l'heure comme numéro de facture
            $facture->numeroFacture = $dateHeure;
        });
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
