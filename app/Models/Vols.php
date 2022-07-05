<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vols extends Model
{
    use HasFactory;
    protected $fillable = ['code_vol', 'destination', 'date_depar', 'heure_depart', 'nombre_place_A', 
    'nombre_place_B', 'prix_classe_A', 'prix_classe_B'];
}
