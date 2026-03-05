<?php

use Illuminate\Support\Facades\Route;
use App\Models\Document;
use App\Models\CliniqueConventionnee;
use App\Models\MedecinConventionne;
use App\Models\MedecinNonConventionne;
use App\Models\Laboratoire;
use App\Models\Pharmacie;

Route::get('/', function () {
    // On récupère toutes les données de nos 6 tables
    return view('welcome', [
        'documents' => Document::latest()->get(),
        'cliniques' => CliniqueConventionnee::all(),
        'medecinsConv' => MedecinConventionne::all(),
        'medecinsNonConv' => MedecinNonConventionne::all(),
        'laboratoires' => Laboratoire::all(),
        'pharmacies' => Pharmacie::all(),
    ]);
});