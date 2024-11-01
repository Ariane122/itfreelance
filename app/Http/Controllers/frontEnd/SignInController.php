<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignInController extends Controller
{
    public function index(){
        return view('front-end.pages.connexion.connexion');
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

    // dd(Auth::attempt($credentials));

    // Tentative d'authentification
    if (Auth::attempt($credentials)) {
        // Authentification réussie
        // dd(Auth::user()->email);
        \Log::info('Authentification réussie pour l\'utilisateur: ' . Auth::user()->email);

        // Redirection vers le tableau de bord prestataire
        return redirect()->route('dashboarder');
        // return view('presta-service.pages.dashboard');
    } else {
        // Échec de l'authentification
        \Log::info('Échec de l\'authentification pour l\'email: ' . $request->input('email'));

        // Redirection vers la page de connexion avec un message d'erreur
        return redirect()->route('signin')->with('error', "Email ou mot de passe incorrect");
    }
}

public function logout () {
    Auth::logout();
    return redirect()->route('signin');
   }


}
