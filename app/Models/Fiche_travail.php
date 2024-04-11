<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fiche_travail extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function facture()
    {
        return $this->belongsTo(Facture::class);
    }
}
