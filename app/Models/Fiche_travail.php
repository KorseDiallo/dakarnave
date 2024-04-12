<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fiche_travail extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function facture()
    {
        return $this->belongsTo(Facture::class, 'facture_id');
    }

    public function memos() : HasMany
    {
     return $this->hasMany(Memo::class);
    }
}
