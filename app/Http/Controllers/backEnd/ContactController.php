<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index () {
        $contacts = Contact::all();
        return view('back-end.pages.Contacts.contact' , compact('contacts'));
    }
}
