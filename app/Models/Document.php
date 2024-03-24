<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'fichier',
        'departement_id',
        'category_id',
        'description',
        'user_id',
        'statut'
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function departement() {
        return $this->belongsTo(Departement::class, 'category_id');
    }
}


// ument(nom, fichier, departement_id, description, date_creation, user_id, statut)
