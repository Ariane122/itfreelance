<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index(){

            return view('front-end.pages.about-us.about-us');
        }

    public function team(){

            return view('front-end.pages.about-us.our-team');
        }

}
