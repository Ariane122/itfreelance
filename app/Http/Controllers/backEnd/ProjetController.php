<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Categorie;
use App\Models\Entreprise;
use App\Models\Projet;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function index () {
        $projets = Projet::all();
        $categories = Categorie::all();
        $entreprises = Entreprise::all();
        return view('back-end.pages.projet.projet' , compact('projets' , 'categories' , 'entreprises'));
    }

    public function show ($id) {
     $projet = Projet::findOrFail($id);
     return view('back-end.pages.projet.projet-show',compact('projet'));
    }

    public function create () {
        $categories = Categorie::all();
        $entreprises = Entreprise::all();
        return view('back-end.pages.projet.projet-create',compact('categories' , 'entreprises'));
    }

    public function edit ($id) {
        $projet = Projet::findOrFail($id);
        $categories = Categorie::all();
        $entreprises = Entreprise::all();
        return view('back-end.pages.projet.projet-edit',compact('projet', 'categories' , 'entreprises'));
    }
    public function addProjet (Request $request) {

        if($request->input('id') > 0){

            $projet = Projet::findOrFail($request->input('id'));
            // $projet->type_prestation = $request->type_prestation ;
            $projet->titre = $request->titre;
            $projet->debut = $request->debut;
            $projet->fin = $request->fin;
            $projet->budget = $request->budget;
            $projet->description = $request->description;
            $projet->lieu = $request->lieu ;
            $projet->entreprise_id = $request->entreprise_id;
            $projet->save();
            return redirect()->route('admin.projet')->with('success','Projet Modifié avec Success !');

        }else{
            $projet = new Projet();
            $projet->titre = $request->titre;
            $projet->debut = $request->debut;
            $projet->fin = $request->fin;
            $projet->budget = $request->budget;
            $projet->description = $request->description;
            $projet->lieu = $request->lieu ;
            $projet->status = "En attente" ;
            $projet->entreprise_id = $request->entreprise_id;
                // Gestion des fichiers téléchargés
        if ($request->hasFile('files')) {
            $filePaths = []; // Tableau pour stocker les chemins des fichiers

            foreach ($request->file('files') as $file) {
                // Stockage du fichier et récupération du chemin
                $path = $file->store('documents'); // Remplacez 'documents' par le nom du dossier souhaité
                $filePaths[] = $path; // Ajoute le chemin au tableau
            }

            // Enregistre les chemins sous forme de chaîne, séparés par des virgules
            $projet->document = implode(',', $filePaths);
        }
            $projet->save();
            return redirect()->route('admin.projet')->with('success', 'Projet Ajouté avec Succès !');
        };
   }
    public function delete ($id) {
        $projet = Projet::findOrFail($id);
        $projet->delete();
        return redirect()->back();
    }
}
