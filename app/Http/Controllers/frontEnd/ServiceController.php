<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index () {
        // $categories = Categorie::all();
        // return view('front-end.pages.services.services' , compact('categories'));
        return view('front-end.pages.services.it-service');
    }
}
