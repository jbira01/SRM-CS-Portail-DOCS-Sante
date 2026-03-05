<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedecinNonConventionne extends Model
{
    protected $fillable = [
        'specialite', 
        'praticien', 
        'adresse', 
        'telephone', 
        'accord_tarifaire'
    ];
}
