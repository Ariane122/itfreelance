<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignUpController extends Controller
{ 
    public function index(){
      
    return view('front-end.pages.freelance.inscription');
}
}