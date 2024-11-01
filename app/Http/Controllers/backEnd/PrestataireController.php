<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Prestataire;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class PrestataireController extends Controller
{
    public function index () {
       $prestataires = Prestataire::all();
       $categories = Categorie::all();
       $sousCategories = SousCategorie::all();
      // dd($prestataires);
       return view('back-end.pages.prestataire.prestataire' , compact('prestataires' , 'categories','sousCategories'));
    }

    public function show ($id) {
        $prestataire = Prestataire::findOrFail($id);
        return view('back-end.pages.prestataire.prestataire-show',compact('prestataire'));
    }

    public function addPrestataire (Request $request) {
        // dd($request->all());
        // if($request->input('id') > 0){

        //     $prestataire = Prestataire::findOrFail($request->input('id'));
        //     $prestataire->metier = $request->metier ;
        //     $prestataire->competence = $request->competence;
        //     $prestataire->niveau = $request->niveau;
        //     $prestataire->categorie_id = $request->categorie_id;
        //     $prestataire->save();

        //    $user = User::FindOrFail($prestataire->user_id);
        //    $user->nom = $request->nom ;
        //    $user->prenom = $request->prenom;
        //    $user->telephone = $request->telephone;
        //    $user->email = $request->email;

        //    if($user->password != $request->input('password') ) {
        //         $user->password= Hash::make('123456789');
        //     // $user->password= bcrypt($request->input('password'));
        //    }
        //    $user->save();
        //     return redirect()->route('admin.prestataire.index')->with('success','Prestataire Modifié avec Success !');
        // }else{

       // Créez un nouvel utilisateur
$user = new User;
$user->nom = $request->nom;
$user->prenom = $request->prenom;
$user->telephone = $request->telephone;
$user->email = $request->email;
$user->role = 2;
$user->password = Hash::make('123456789');
$user->save();

// Récupérez les sous-catégories, qui peuvent être vides
$sousCategories = $request->input('sousCategorie', []); // Utilisez un tableau vide par défaut

// Créez un nouveau prestataire
$prestataire = new Prestataire();
$prestataire->niveau = $request->niveau;
$prestataire->categorie_id = $request->categorie;
$prestataire->user_id = $user->id;
$prestataire->status = "Active";
 // Gestion des fichiers téléchargés
 if ($request->hasFile('files')) {
    $filePaths = []; // Tableau pour stocker les chemins des fichiers

    foreach ($request->file('files') as $file) {
        // Stockage du fichier et récupération du chemin
        $path = $file->store('documents/cv'); // Remplacez 'documents' par le nom du dossier souhaité
        $filePaths[] = $path; // Ajoute le chemin au tableau
    }

    // Enregistre les chemins sous forme de chaîne, séparés par des virgules
    $prestataire->cv = implode(',', $filePaths);
}
$prestataire->save();

// Vérifiez si des sous-catégories ont été fournies avant d'attacher
if (!empty($sousCategories)) {
    foreach ($sousCategories as $sousCategorieId) {
        $prestataire->sousCategories()->attach($sousCategorieId);
    }
}


            return  redirect()->back()->with('success','Prestataire Ajoutè avec Success !');
        // };
     }

     public function edit ($id) {
        $entreprise =Prestataire::findOrFail($id);
        $categories = Categorie::all();
        return view('back-end.pages.entreprise.entreprise-edite',compact('entreprise' , 'categories'));
    }

    public function delete ($id) {
        $entreprise = Prestataire::findOrFail($id);
        $entreprise->delete();
        return redirect()->back()->with('success','Prestataire supprimer avec Success !');
    }

}
