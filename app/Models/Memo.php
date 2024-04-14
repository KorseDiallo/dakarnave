<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Memo extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    // public function ficheDetravail()
    // {
    //     return $this->belongsTo(Fiche_travail::class, 'fiche_travail_id');
    // }

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'facture_id');
    }
}
