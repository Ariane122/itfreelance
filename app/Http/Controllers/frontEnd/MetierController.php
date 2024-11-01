<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Prestataire;
use Illuminate\Http\Request;

class MetierController extends Controller
{
    public function index () {
        $prestataires = Prestataire::all();
        return view('front-end.pages.metiers.metiers' , compact('prestataires'));
    }
}
