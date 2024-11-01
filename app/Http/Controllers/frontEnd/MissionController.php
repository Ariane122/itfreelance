<?php

namespace App\Http\Controllers\frontEnd;

use App\Http\Controllers\Controller;

use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\Projet;
use App\Models\User;
use App\Notifications\ProjetNotification;
use Illuminate\Http\Request;

class MissionController extends Controller
{
    public function index () {
     $categories = Categorie::all();
      return view('front-end.pages.missions.missions' , compact('categories'));
    }

    public function create (Request $request) {
        $request->validate([
            'email'=>'required|unique:users,email',
            // 'password'=>'required',
            'nom'=>'required',
            'prenom'=>'required',
            'telephone'=>'required',
            'nom_entreprise'=>'required',
            'fonction'=>'required',
            'civilite'=>'required',
            'type_prestation'=>'required',
            'titre'=>'required',
            'debut'=>'required',
            'lieu'=>'required',
         ]);

        $user = new User();
        $user->nom = $request->nom ;
        $user->prenom = $request->prenom;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->role = 2;
        // $user->password= bcrypt($request->input('password'));
        $user->save();

        $entreprise = new Entreprise();
        $entreprise->nom_entreprise = $request->nom_entreprise ;
        $entreprise->fonction = $request->fonction;
        $entreprise->civilite = $request->civilite;
        $entreprise->user_id = $user->id ;
        $entreprise->save();

        $projet = new Projet();
        $projet->type_prestation = $request->type_prestation ;
        $projet->titre = $request->titre;
        $projet->debut = $request->debut;
        $projet->description = $request->description;
        $projet->lieu = $request->lieu ;
        $projet->categorie_id = $request->categorie_id;
        $projet->entreprise_id = $entreprise->id;
        $projet->save();

        $admins = User::where('role', 0)->get();

        foreach ($admins as $admin) {
            $admin->notify(new ProjetNotification($projet));
        }

        return  redirect()->back()->with('success','Ajouter  avec Success !');


    }
}
