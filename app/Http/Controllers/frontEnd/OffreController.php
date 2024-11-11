<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OffreController extends Controller
{
    public function index(){

            return view('front-end.pages.offre.offre');
    }


}
