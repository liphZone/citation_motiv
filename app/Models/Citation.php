<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Citation extends Model
{
    use HasFactory;

    protected $fillable = [
        'auteur',
        'categorie',
        'citation',
        'profil',
        'date',
        'etat',
        'user_id',
        'type_utilisateur'
    ];

    public function likes(){
        return $this->hasMany('\App\Models\Like');
    }
}

