<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index(){

            return view('front-end.pages.contacts.contacts');
    }

    public function create(Request $request){
        $request->validate([
            'email'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'message' =>'required',
         ]);

        Contact::create([
            'nom'=> $request->nom ,
            'prenom'=> $request->prenom ,
            'email'=>$request->email ,
            'telephone'=> $request->telephone ,
            'message' => $request->message ,
        ]);

        return  redirect()->back()->with('success','Votre message a été transmis');
    }

}
