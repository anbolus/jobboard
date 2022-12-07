<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;
    protected $fillable = ["nom_entreprise", "siege_social", "taille_entreprise",
        "chiffre_affaire", "secteur_entreprise", "lien_entreprise"];
}
