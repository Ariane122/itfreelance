<?php

namespace App\Http\Controllers\backEnd;

use App\Http\Controllers\Controller;
use App\Models\Contrat;
use App\Models\Entreprise;
use App\Models\Prestataire;
use App\Models\TypeContrat;
use App\Models\Projet;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class ContratController extends Controller
{
    public function index () {
        $contrats = Contrat::all();
        $typeContrats = TypeContrat::all();
        $prestataires = Prestataire::all();
        $projets = Projet::all();
        $entreprises = Entreprise::all();
        return view('back-end.pages.contrat.contrat' , compact('contrats','typeContrats', 'prestataires' , 'entreprises' , 'projets'));
    }

    public function show ($id) {
        $contrat = Contrat::FindOrFail($id);
        return view('back-end.pages.contrat.contrat-show' , compact('contrat' ));
    }

    public function Create (Request $request) {
        /*$request->validate([

        ]);*/

        $prestataires = $request->input('prestataire_id', []);

        $contrat = new Contrat();
        $contrat->projet_id = $request->projet_id;
        $contrat->type_contrat_id = $request->type_contrat_id;
        $contrat->save();

        if (!empty($prestataires)) {
            foreach ($prestataires as $prestataire) {
                $contrat->contratPrestataires()->attach($prestataire);
            }
        }

         return redirect()->back()->with('success' , "Contrat ajouté");
    }

    public function edit ($id) {
        $contrat = Contrat::FindOrFail($id);
        $prestataires = Prestataire::all();
        $projets = Projet::all();
        $entreprises = Entreprise::all();
        return view('back-end.pages.contrat.contat-edite', compact('contrat','prestataires' , 'entreprises' , 'projets'));
    }

    public function update ($id , Request $request) {
        $contrat = Contrat::findOrFail($id);
        $contrat->debut=$request->debut ;
        $contrat->dure = $request->dure ;
        $contrat->prestataire_id = $request->prestataire_id ;
        $contrat->projet_id = $request->projet_id ;
        $contrat->entreprise_id=$request->entreprise_id;
        $contrat->description=$request->description;
        $contrat->save();
        return redirect()->route('admin.contrat.index')->with('success' , "contrat modifier");
    }

    public function delete ($id) {
      $contrat = Contrat::FindOrFail($id);
      $contrat->delete();
      return redirect()->back();
    }
}
