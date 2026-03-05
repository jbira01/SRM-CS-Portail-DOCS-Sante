<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MedecinConventionne extends Model
{
    protected $fillable = [
        'specialite', 
        'praticien', 
        'adresse', 
        'telephone', 
        'accord_tarifaire'
    ];
}
