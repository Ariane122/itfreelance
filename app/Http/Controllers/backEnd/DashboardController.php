<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestataire;
use App\Models\Projet;

class DashboardController extends Controller
{
    public function index () {

        $prestataires_count = Prestataire::all()->count();
        $prestataires = Prestataire::all();

        $missions = Projet::all()->count();


        return view('back-end.pages.dashboard',compact('prestataires','prestataires_count','missions'));
        // return view('back-end.pages.dashboard');
        // return view('back-end.layouts.app');
    }
}
