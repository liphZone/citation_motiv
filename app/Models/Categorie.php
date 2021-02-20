<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable = ['reference_categorie','libelle_categorie','description_categorie'];
}
