<?php

namespace App\Http\Controllers\frontEnd;


use App\Events\FreelanceProcessed;
use App\Http\Controllers\Controller;
use App\Mail\VerifyMail;
use App\Models\Categorie;
use App\Models\SousCategorie;
use App\Models\Prestataire;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use App\Notifications\FreelanceNotification;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Models\Contrat;
use Illuminate\Support\Facades\Auth;
use App\Models\Projet;
use Carbon\Carbon;


class FreelanceController extends Controller
{

    public function index () {
        $categories = Categorie::all();
        $sousCategories = SousCategorie::all();
        return view('front-end.pages.freelance.inscription' , compact('categories','sousCategories'));
    }

    public function home(){

        $contrats = Contrat::all();

        return view('presta-service.pages.dashboard',compact('contrats'));
    }

    // public function contrat() {
    //     $contrats = Auth::user()->prestataire->contrats;

    //     $events = $contrats->map(function($contrat) {
    //         $projet = Projet::find($contrat->projet_id);
    //         if ($projet) {
    //             return [
    //                 'title' => $projet->titre,
    //                 'start' => $projet->debut,
    //                 'end' => $projet->fin ?? $projet->debut,
    //             ];
    //         }
    //         return null;
    //     });
    //     return view('presta-service.pages.prestataire.list-contrat', compact('events'));
    // }

    public function contrat() {
        
        $contrats = Auth::user()->prestataire->contrats;

        Carbon::setLocale('fr');

        $events = $contrats->map(function($contrat) {
            $projet = Projet::find($contrat->projet_id);
            if ($projet) {
                return [
                    'title' => $projet->titre,
                    'start' => Carbon::createFromFormat('d/m/Y', $projet->debut)->format('d F Y'),
                    'end' => $projet->fin ? Carbon::createFromFormat('d/m/Y', $projet->fin)->format('d F Y') : Carbon::createFromFormat('d/m/Y', $projet->debut)->format('d F Y'),
                ];
            }
            return null;
        });

        return view('presta-service.pages.prestataire.list-contrat', compact('events'));
    }




    public function create (Request $request) {

        // dd($request->all());
        // $request->validate([
        //     'email'=>'required|unique:users,email',
        //     'password' => '|required_with:password_confirmation|same:password_confirmation',
        //     'password_confirmation' => 'required',
        //     'nom'=>'required',
        //     'prenom'=>'required',
        //     'telephone'=>'required',
        //     'competence'=>'required',
        //     'categorie_id'=>'required',
        //     'niveau'=>'required',
        //    'cv'=>'required'
        //  ]);

        $user = new User();
        $user->nom = $request->nom ;
        $user->prenom = $request->prenom;
        $user->telephone = $request->telephone;
        $user->email = $request->email;
        $user->role = 2;
        $user->password= Hash::make($request->password);
        $user->save();

        $competences = $request->input('competence', []); // Utilisez un tableau vide par défaut

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
        if (!empty($competences)) {
            foreach ($competences as $competence) {
                $prestataire->sousCategories()->attach($competence);
            }
        }


        // $admins = User::where('role', 0)->get();

        // foreach ($admins as $admin) {
        //     $admin->notify(new FreelanceNotification($user));
        // }

        // $info = [
        // "pseudo"=>$user->prenom + " " + $user->nom ,
        //     "link"=> 'rien',
        // ];
        // Mail::to($user->email)->send(new VerifyMail($info));

        // return  redirect()->back()->with('success','Ajouter  avec Success !');
    }


}
