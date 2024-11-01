<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   public function index () {
    return view('back-end.pages.connexion');
   }


   public function erreur () {
    return view('back-end.pages.AccessError');
   }

   public function login(Request $request)
   {
       // Validation des champs de la requête
       $request->validate([
           'email' => 'required|email',
           'password' => 'required',
       ]);

       // Récupération des credentials
       $credentials = $request->only('email', 'password');

       // Tentative d'authentification
       if (Auth::attempt($credentials)) {
           // Authentification réussie
           \Log::info('Authentification réussie pour l\'utilisateur: ' . Auth::user()->email);

           // Message de débogage avant la redirection
           \Log::info('Redirection vers admin.dashboard');
           return redirect()->route('admin.dashboard');
       } else {
           // Échec de l'authentification
           \Log::info('Échec de l\'authentification pour l\'email: ' . $request->input('email'));

           // Message de débogage avant la redirection
           \Log::info('Redirection vers admin.connexion');
           return redirect()->route('admin.connexion')->with('error', "Email ou mot de passe incorrect");
       }
   }

   public function logout () {
    Auth::logout();
    return redirect()->route('admin.connexion');
   }

}
