<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisements extends Model
{
    use HasFactory;
    protected $fillable = ["nom_poste", "lieu", "salaire", "type_contrat", "description"];
}
