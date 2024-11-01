<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Expertise;
class ExpertiseController extends Controller
{
    //
    public function index(){
    $Expertise = Expertise::all();
    return view('front-end.pages.expertises.expertises', compact('Expertise'));
    }
}
